<style>

.To_top_btn a {
position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;background-color: #000000;
  color: white;
  border: none;
  padding: 10px 15px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 5px;
}


.To_top_btn a:hover,
.To_top_btn a:focus,
.To_top_btn a:active {
  background-color: #808080;
  outline: none;
  animation: shake 0.5s;


}

@keyframes shake {
  10%, 90% {
    transform: translate3d(-1px, 0, 0);
  }
  
  20%, 80% {
    transform: translate3d(2px, 0, 0);
  }

  30%, 50%, 70% {
    transform: translate3d(-4px, 0, 0);
  }

  40%, 60% {
    transform: translate3d(4px, 0, 0);
  }
}
</style>
