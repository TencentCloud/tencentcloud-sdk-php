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
 * DescribeBotSceneList返回参数结构体
 *
 * @method integer getTotalCount() 获取符合筛选条件的场景数目
 * @method void setTotalCount(integer $TotalCount) 设置符合筛选条件的场景数目
 * @method array getBotSceneList() 获取当TotalCount为0时，返回空
 * @method void setBotSceneList(array $BotSceneList) 设置当TotalCount为0时，返回空
 * @method boolean getSimpleFlag() 获取true-简易模式
 * @method void setSimpleFlag(boolean $SimpleFlag) 设置true-简易模式
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBotSceneListResponse extends AbstractModel
{
    /**
     * @var integer 符合筛选条件的场景数目
     */
    public $TotalCount;

    /**
     * @var array 当TotalCount为0时，返回空
     */
    public $BotSceneList;

    /**
     * @var boolean true-简易模式
     */
    public $SimpleFlag;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 符合筛选条件的场景数目
     * @param array $BotSceneList 当TotalCount为0时，返回空
     * @param boolean $SimpleFlag true-简易模式
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("BotSceneList",$param) and $param["BotSceneList"] !== null) {
            $this->BotSceneList = [];
            foreach ($param["BotSceneList"] as $key => $value){
                $obj = new BotSceneInfo();
                $obj->deserialize($value);
                array_push($this->BotSceneList, $obj);
            }
        }

        if (array_key_exists("SimpleFlag",$param) and $param["SimpleFlag"] !== null) {
            $this->SimpleFlag = $param["SimpleFlag"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
