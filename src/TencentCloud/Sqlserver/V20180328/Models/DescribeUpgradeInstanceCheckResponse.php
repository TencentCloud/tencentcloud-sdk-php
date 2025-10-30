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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUpgradeInstanceCheck返回参数结构体
 *
 * @method integer getIsAffect() 获取本变配是否对实例有影响，0-没有影响 1-有影响
 * @method void setIsAffect(integer $IsAffect) 设置本变配是否对实例有影响，0-没有影响 1-有影响
 * @method integer getPassed() 获取本变配是否可以执行 0-不通过，不能变配 1-通过，可以变配
 * @method void setPassed(integer $Passed) 设置本变配是否可以执行 0-不通过，不能变配 1-通过，可以变配
 * @method string getModifyMode() 获取本变配是升配还是降配，down-降配 up-升配
 * @method void setModifyMode(string $ModifyMode) 设置本变配是升配还是降配，down-降配 up-升配
 * @method array getCheckItems() 获取检查项列表
 * @method void setCheckItems(array $CheckItems) 设置检查项列表
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeUpgradeInstanceCheckResponse extends AbstractModel
{
    /**
     * @var integer 本变配是否对实例有影响，0-没有影响 1-有影响
     */
    public $IsAffect;

    /**
     * @var integer 本变配是否可以执行 0-不通过，不能变配 1-通过，可以变配
     */
    public $Passed;

    /**
     * @var string 本变配是升配还是降配，down-降配 up-升配
     */
    public $ModifyMode;

    /**
     * @var array 检查项列表
     */
    public $CheckItems;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $IsAffect 本变配是否对实例有影响，0-没有影响 1-有影响
     * @param integer $Passed 本变配是否可以执行 0-不通过，不能变配 1-通过，可以变配
     * @param string $ModifyMode 本变配是升配还是降配，down-降配 up-升配
     * @param array $CheckItems 检查项列表
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
        if (array_key_exists("IsAffect",$param) and $param["IsAffect"] !== null) {
            $this->IsAffect = $param["IsAffect"];
        }

        if (array_key_exists("Passed",$param) and $param["Passed"] !== null) {
            $this->Passed = $param["Passed"];
        }

        if (array_key_exists("ModifyMode",$param) and $param["ModifyMode"] !== null) {
            $this->ModifyMode = $param["ModifyMode"];
        }

        if (array_key_exists("CheckItems",$param) and $param["CheckItems"] !== null) {
            $this->CheckItems = [];
            foreach ($param["CheckItems"] as $key => $value){
                $obj = new CheckItem();
                $obj->deserialize($value);
                array_push($this->CheckItems, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
