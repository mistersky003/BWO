var Errors = {
    
    answer_UA: null,
    answer_EN: null,
    
    getAnswer: function (code, language) {
       
        switch (code) {
           case '00':
              answer_UA = "Доступ заборонено";  
              answer_EN = "Accsess";  
           break; 
           case '01':
              answer_UA = "";  
              answer_EN = "";   
           break; 
           case '02':
              answer_UA = "";  
              answer_EN = "";   
           break;
           case '03':
              answer_UA = "";  
              answer_EN = "";   
           break; 
           case '04':
               answer_UA = "";  
               answer_EN = "";   
           break; 
           case '05':
               answer_UA = "";  
               answer_EN = "";   
           break;
           case '06':
               answer_UA = "";  
               answer_EN = "";   
           break; 
          
        }
        
        if (language == "UA") {
              return answer_UA;
        }
        
        if (language == "EN") {
            return answer_EN;
        }
        
    }
    
};