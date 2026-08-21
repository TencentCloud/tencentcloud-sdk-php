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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLicenseStatus返回参数结构体
 *
 * @method array getList() 获取<p>授权状态列表（旗舰版→专业版→RASP）</p>
 * @method void setList(array $List) 设置<p>授权状态列表（旗舰版→专业版→RASP）</p>
 * @method integer getAutoRepurchaseSwitch() 获取<p>自动加购开关 0-关 1-开</p>
 * @method void setAutoRepurchaseSwitch(integer $AutoRepurchaseSwitch) 设置<p>自动加购开关 0-关 1-开</p>
 * @method integer getUnbindCountLeft() 获取<p>合并剩余解绑次数 = (旗舰版total + 专业版total) × 2 - 当月已解绑次数</p>
 * @method void setUnbindCountLeft(integer $UnbindCountLeft) 设置<p>合并剩余解绑次数 = (旗舰版total + 专业版total) × 2 - 当月已解绑次数</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLicenseStatusResponse extends AbstractModel
{
    /**
     * @var array <p>授权状态列表（旗舰版→专业版→RASP）</p>
     */
    public $List;

    /**
     * @var integer <p>自动加购开关 0-关 1-开</p>
     */
    public $AutoRepurchaseSwitch;

    /**
     * @var integer <p>合并剩余解绑次数 = (旗舰版total + 专业版total) × 2 - 当月已解绑次数</p>
     */
    public $UnbindCountLeft;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $List <p>授权状态列表（旗舰版→专业版→RASP）</p>
     * @param integer $AutoRepurchaseSwitch <p>自动加购开关 0-关 1-开</p>
     * @param integer $UnbindCountLeft <p>合并剩余解绑次数 = (旗舰版total + 专业版total) × 2 - 当月已解绑次数</p>
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
        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new LicenseStatusItem();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("AutoRepurchaseSwitch",$param) and $param["AutoRepurchaseSwitch"] !== null) {
            $this->AutoRepurchaseSwitch = $param["AutoRepurchaseSwitch"];
        }

        if (array_key_exists("UnbindCountLeft",$param) and $param["UnbindCountLeft"] !== null) {
            $this->UnbindCountLeft = $param["UnbindCountLeft"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
