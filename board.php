<article>
      <img id="redPawn1" class="pawn" src="images/redPawn.png" />
      <img id="yellowPawn1" class="pawn" src="images/yellowPawn.png" />
  

    <!-- Pawn test <figure class = "greenHome">
      <img src="images/redPawn.png">
    </figure> -->
  </article> 


  <form id="updateButton">
         
         <input type="button" value="red pawn" onclick="move('redPawn1');" />
    </form>

    <form id="updateButton2" style="top:200px;position:absolute;">
         
         <input type="button" value="yellow pawn" onclick="move('yellowPawn1');" />
    </form>


    <button>get position</button>

    <script type="text/javascript">
         <!--
            var imgObj = null;
            
            var spacePos = ['b1', [13,5],'b2',[52,5],'b3',[91,5],'b3-1',[91, 44], 'b3-2', [91,83], 'b3-3', [91,122], 'b3-4', [91, 161], 'b3-5', [91, 200], 
                            'b3-6', [91, 239], 'b4', [130,5], 'b5', [169,5], 'b6', [208,5], 'b7', [247,5], 'b8', [286,5], 'b9', [325,5],'b10', [364,5], 'b11', 
                            [403,5], 'b12', [442,5],'b13',[481,5],'b14', [520,5], 'b15', [559,5],'y1', [598,5],'y2', [598,44],'y3', [598,83],'y3-1', [559,83],
                            'y3-2', [520,83],'y3-3', [481,83],'y3-4', [442,83],'y3-5', [403,83],'y3-6', [364,83],'y4',[598,122],'y5',[598,161],'y6',[598,200],
                            'y7',[598,239],'y8',[598,278],'y9',[598,317],'y10',[598,356],'y11',[598,395],'y12',[598,434],'y13',[598,473],'y14',[598,512],'y15',
                            [598,551],'g1',[598,590],'g2',[559,590],'g3',[520,590],'g3-1',[520,551],'g3-2',[520,512],'g3-3', [520,473],'g3-4',[520,434],'g3-5',
                            [520,395],'g3-6',[520,356],'g4',[481,590],'g5',[442,590],'g6',[403,590],'g7',[364,590],'g8',[325,590],'g9',[286,590],'g10',[247,590],
                            'g11',[208,590],'g12', [169,590],'g13',[130,590],'g14',[91,590],'g15',[52,590],'r1',[13,590],'r2',[13,551],'r3',[13,512],'r3-1',[52,512],
                            'r3-2',[91,512],'r3-3',[91,512],'r3-4',[130,512],'r3-5',[169,512],'r3-6',[208,512],'r4',[13,473],'r5',[13,434],'r6',[13,395],'r7',
                            [13,356],'r8',[13,317],'r9',[13,278],'r10',[13,239],'r11',[13,200],'r12',[13,161],'r13',[13,122],'r14',[13,83],'r15',[13,44]]; 
            var arrayPos=0;
            var arrayIndex=0;

            function getCssProperty(elmId, property){
              console.log(spacePos);
              // console.log(spacePos);
               var elem = document.getElementById(elmId);
               return window.getComputedStyle(elem,null).getPropertyValue(property);
            }

            
            
            function move(pawn){
               imgObj = document.getElementById(pawn);
               imgObj.style.position= 'absolute'; 
               var arr;
               // imgObj.style.left =  getCssProperty(pawn,'left');
               //  imgObj.style.top =  getCssProperty(pawn,'top');
               for (x = 0; x < spacePos.length; x++) {
                  var arr = spacePos[x];
                  if (Array.isArray(spacePos)) {
                      // console.log(arr[0]);
                      // console.log(parseInt(getCssProperty(pawn,'left')));
                      // console.log(arr[0] === parseInt(getCssProperty(pawn,'left')));
                
                      if (arr[0] === parseInt(getCssProperty(pawn,'left')) && (arr[1] === parseInt(getCssProperty(pawn,'top')))) {
                        arrayIndex = x;
                        console.log(x);
                      }
                   if(arrayIndex===spacePos.length-1) {
                        arrayIndex = -1;
                      }

                   // 1=spacePos.indexOf([getCssProperty(pawn,'left'),getCssProperty(pawn,'top')]);
                   imgObj.style.left =spacePos[arrayIndex+2][0] + 'px';
                   imgObj.style.top =spacePos[arrayIndex+2][1] + 'px';
                }
             }
                  arr = spacePos[x];
                  if (Array.isArray(arr)) {
                    // console.log(arr);
                      // console.log(arr[0]);
                      // console.log(parseInt(getCssProperty(pawn,'left')));
                      // console.log(parseInt(getCssProperty(pawn,'left')));
                      // console.log(parseInt(getCssProperty(pawn,'top')));
                
                  if (arr[0] === parseInt(getCssProperty(pawn,'left')) && (arr[1] === parseInt(getCssProperty(pawn,'top')))) {
                        arrayIndex = x;
                        // console.log(arr[0]);
                        // console.log(arr[1]);
                  }

                   if(arrayIndex===spacePos.length-1) {
                        arrayIndex = -1;
                      }

                   // 1=spacePos.indexOf([getCssProperty(pawn,'left'),getCssProperty(pawn,'top')]);
              }
            }
                // console.log(spacePos[arrayIndex+2][0] + 'px');
                // console.log(spacePos[arrayIndex+2][1] + 'px');
                imgObj.style.left = spacePos[arrayIndex+2][0] + 'px';
                imgObj.style.top = spacePos[arrayIndex+2][1] + 'px';

             //console.log(arrayIndex+2);
             // console.log(arr);
               
               // console.log(getCssProperty('myImage','left'));
            }
          
         //-->
      </script>

      