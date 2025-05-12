<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBotSceneOverview返回参数结构体
 *
 * @method boolean getStatus() 获取BOT总开关
 * @method void setStatus(boolean $Status) 设置BOT总开关
 * @method integer getSceneCount() 获取场景总数
 * @method void setSceneCount(integer $SceneCount) 设置场景总数
 * @method integer getValidSceneCount() 获取生效场景数
 * @method void setValidSceneCount(integer $ValidSceneCount) 设置生效场景数
 * @method GlobalSceneInfo getCurrentGlobalScene() 获取当前开启的、匹配范围为全局、优先级最高的场景
 * @method void setCurrentGlobalScene(GlobalSceneInfo $CurrentGlobalScene) 设置当前开启的、匹配范围为全局、优先级最高的场景
 * @method integer getCustomRuleNums() 获取自定义规则总数，不包括BOT白名单
 * @method void setCustomRuleNums(integer $CustomRuleNums) 设置自定义规则总数，不包括BOT白名单
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBotSceneOverviewResponse extends AbstractModel
{
    /**
     * @var boolean BOT总开关
     */
    public $Status;

    /**
     * @var integer 场景总数
     */
    public $SceneCount;

    /**
     * @var integer 生效场景数
     */
    public $ValidSceneCount;

    /**
     * @var GlobalSceneInfo 当前开启的、匹配范围为全局、优先级最高的场景
     */
    public $CurrentGlobalScene;

    /**
     * @var integer 自定义规则总数，不包括BOT白名单
     */
    public $CustomRuleNums;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $Status BOT总开关
     * @param integer $SceneCount 场景总数
     * @param integer $ValidSceneCount 生效场景数
     * @param GlobalSceneInfo $CurrentGlobalScene 当前开启的、匹配范围为全局、优先级最高的场景
     * @param integer $CustomRuleNums 自定义规则总数，不包括BOT白名单
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SceneCount",$param) and $param["SceneCount"] !== null) {
            $this->SceneCount = $param["SceneCount"];
        }

        if (array_key_exists("ValidSceneCount",$param) and $param["ValidSceneCount"] !== null) {
            $this->ValidSceneCount = $param["ValidSceneCount"];
        }

        if (array_key_exists("CurrentGlobalScene",$param) and $param["CurrentGlobalScene"] !== null) {
            $this->CurrentGlobalScene = new GlobalSceneInfo();
            $this->CurrentGlobalScene->deserialize($param["CurrentGlobalScene"]);
        }

        if (array_key_exists("CustomRuleNums",$param) and $param["CustomRuleNums"] !== null) {
            $this->CustomRuleNums = $param["CustomRuleNums"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
