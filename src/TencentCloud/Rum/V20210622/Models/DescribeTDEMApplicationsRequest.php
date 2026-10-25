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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTDEMApplications请求参数结构体
 *
 * @method integer getOffset() 获取<p>分页偏移，默认 0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移，默认 0</p>
 * @method integer getLimit() 获取<p>每页数量，默认 20，上限 100</p>
 * @method void setLimit(integer $Limit) 设置<p>每页数量，默认 20，上限 100</p>
 * @method string getInstanceId() 获取<p>业务系统 ID（可选，缺省返回名下全部应用）</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>业务系统 ID（可选，缺省返回名下全部应用）</p>
 * @method boolean getDemoMode() 获取<p>演示模式开关</p>
 * @method void setDemoMode(boolean $DemoMode) 设置<p>演示模式开关</p>
 */
class DescribeTDEMApplicationsRequest extends AbstractModel
{
    /**
     * @var integer <p>分页偏移，默认 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页数量，默认 20，上限 100</p>
     */
    public $Limit;

    /**
     * @var string <p>业务系统 ID（可选，缺省返回名下全部应用）</p>
     */
    public $InstanceId;

    /**
     * @var boolean <p>演示模式开关</p>
     */
    public $DemoMode;

    /**
     * @param integer $Offset <p>分页偏移，默认 0</p>
     * @param integer $Limit <p>每页数量，默认 20，上限 100</p>
     * @param string $InstanceId <p>业务系统 ID（可选，缺省返回名下全部应用）</p>
     * @param boolean $DemoMode <p>演示模式开关</p>
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DemoMode",$param) and $param["DemoMode"] !== null) {
            $this->DemoMode = $param["DemoMode"];
        }
    }
}
