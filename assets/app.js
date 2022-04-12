function validator(options){
    // hàm thực hiện validate
   
    function getParent(element,selector){
        while(element.parentElement){

            if(element.parentElement.matches(selector)){
                return element.parentElement;
            }
            element = element.parentElement;
        }
      
    }
    var selectorRuler={};
    function validate(inputElement,rule){
        var errorElement = getParent(inputElement,options.formGroupSelector).querySelector(options.errorSelect);
        // var errorElement = inputElement.parentElement.querySelector(options.errorSelect);
        var errorMessage = rule.test(inputElement.value);

        // trường hợp blur ra khỏi form
        var rules = selectorRuler[rule.selector];
        for(var i = 0; i < rules.length; ++i){
            switch(inputElement.type){
                case 'radio':
                case 'checkbox':
                    
                    errorMessage = rules[i](
                        FormElement.querySelector(rule.selector + ':checked')
                    );
                    break;
                    default:
                    errorMessage = rules[i](inputElement.value);
            }
            if(errorMessage) break;
        }
        if(errorMessage){
            errorElement.innerText = errorMessage;
           getParent(inputElement,options.formGroupSelector).classList.add('invalid');
        }
        else{
            errorElement.innerText ='';
           getParent(inputElement,options.formGroupSelector).classList.remove('invalid');
        }
       
        return ! errorMessage;

    }
    
    // hàm lấy element của form cần valudate
   var FormElement = document.querySelector(options.form);

  
   if(FormElement){
       // khi submit form
       FormElement.onsubmit = function(e){
           e.preventDefault();
           var isFormValid = true;

           options.rules.forEach(function(rule){
            var inputElement = FormElement.querySelector(rule.selector);

            var isValid = validate(inputElement,rule);
            if(!isValid){
                isFormValid = false;
            }

           })
           if(isFormValid){
               // trường hợp submit với js
               if(typeof options.onsubmit === 'function'){
                var enableInput = FormElement.querySelectorAll('[name]:not([disabled])');
                var formValues = Array.from(enableInput).reduce(function(values,input){
                    switch(input.type){
                        case 'radio':
                            values[input.name] = FormElement.querySelector('input[name ="'+input.name+'"]:checked').value;
                            break;
                            case 'checkbox':
                                if(!input.matches(':checked')) 
                                return values;
                                if(!Array.isArray(values[input.name])){
                                    values[input.name]=[];
                                }
                                values[input.name].push(input.value);
                        break;
                                case 'file':
                                    values[input.name] = input.files
                                    break;
                        default:
                            values[input.name] = input.value;
                    }
                  
                    return  values;
     
                },{});
                 

                   options.onsubmit(formValues);
               }
                //    submit với hành vi mặt định
               else{
                FormElement.submit();
           }
           }
       
          
       }
     options.rules.forEach(function(rule){
         if(Array.isArray(selectorRuler[rule.selector])){
            selectorRuler[rule.selector].push(rule.test);
         }else{
             selectorRuler[rule.selector] = [rule.test];
         }
      
            var inputElements = FormElement.querySelectorAll(rule.selector);
            Array.from(inputElements).forEach(function(inputElement){
                if(inputElement){
                    inputElement.onblur= function(){
                        validate(inputElement,rule);
                    }
                }
                var errorElement = getParent(inputElement,options.formGroupSelector).querySelector(options.errorSelect);
                inputElement.oninput = function(){
                    errorElement.innerText ='';
                   getParent(inputElement,options.formGroupSelector).classList.remove('invalid');
            
            
                }
            })
           
           
          
     })

   }


}

// định nghĩa ruler
// nguyên tắc của ruler
//1. khi có lỗi thì trả về message lỗi
//2. khi hợp lệ => không trả cái gì cả
validator.isRequired = function(selector,message){
    return {
        selector:selector,
        test:function(value){
            return value ? undefined:  message || 'vui lòng nhập trường hợp này'

        }
    };
   
}
validator.isEmail = function(selector,message){
    return {
        selector:selector,
        test:function(value){
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
           
            return regex.test(value) ? undefined:  message || 'trường này khồng phải Email';
            
        }
    };
}

const contentForm = document.querySelectorAll('.content-project');



contentForm.forEach(function(content,index){
    const modal = content.querySelector('.modal');
    const btnclick =  content.querySelector('.btn-submit');
    const remove = content.querySelector('.modal-overlow');
    btnclick.onclick = function(){
        modal.classList.add('is-active');
    }
    remove.onclick = function(){
        modal.classList.remove('is-active');
    }
})