job("Qodana") {
  startOn {
    gitPush {
      anyBranchMatching {
        +"master"
      }
    }
    codeReviewOpened{}
  }
  container("jetbrains/qodana-php") {
    env["QODANA_TOKEN"] = "{{ project:qodana-token }}"
    shellScript {
      content = "qodana"
    }
  }
}