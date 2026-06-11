<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * DescribeApiSecEventDetail返回参数结构体
 *
 * @method string getDescription() 获取<p>事件描述信息</p>
 * @method void setDescription(string $Description) 设置<p>事件描述信息</p>
 * @method ApiEvent getEventInfo() 获取<p>事件基本信息</p>
 * @method void setEventInfo(ApiEvent $EventInfo) 设置<p>事件基本信息</p>
 * @method array getAttackSource() 获取<p>攻击源详情</p>
 * @method void setAttackSource(array $AttackSource) 设置<p>攻击源详情</p>
 * @method array getChangeHistory() 获取<p>变更历史</p>
 * @method void setChangeHistory(array $ChangeHistory) 设置<p>变更历史</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeApiSecEventDetailResponse extends AbstractModel
{
    /**
     * @var string <p>事件描述信息</p>
     */
    public $Description;

    /**
     * @var ApiEvent <p>事件基本信息</p>
     */
    public $EventInfo;

    /**
     * @var array <p>攻击源详情</p>
     */
    public $AttackSource;

    /**
     * @var array <p>变更历史</p>
     */
    public $ChangeHistory;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Description <p>事件描述信息</p>
     * @param ApiEvent $EventInfo <p>事件基本信息</p>
     * @param array $AttackSource <p>攻击源详情</p>
     * @param array $ChangeHistory <p>变更历史</p>
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EventInfo",$param) and $param["EventInfo"] !== null) {
            $this->EventInfo = new ApiEvent();
            $this->EventInfo->deserialize($param["EventInfo"]);
        }

        if (array_key_exists("AttackSource",$param) and $param["AttackSource"] !== null) {
            $this->AttackSource = [];
            foreach ($param["AttackSource"] as $key => $value){
                $obj = new ApiSecAttackSource();
                $obj->deserialize($value);
                array_push($this->AttackSource, $obj);
            }
        }

        if (array_key_exists("ChangeHistory",$param) and $param["ChangeHistory"] !== null) {
            $this->ChangeHistory = [];
            foreach ($param["ChangeHistory"] as $key => $value){
                $obj = new ApiSecEventChange();
                $obj->deserialize($value);
                array_push($this->ChangeHistory, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
