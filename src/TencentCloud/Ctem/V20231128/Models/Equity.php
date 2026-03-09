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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 股权路径
 *
 * @method string getEnterpriseUid() 获取<p>企业ID</p>
 * @method void setEnterpriseUid(string $EnterpriseUid) 设置<p>企业ID</p>
 * @method string getName() 获取<p>名称</p>
 * @method void setName(string $Name) 设置<p>名称</p>
 * @method string getShareholdingRatio() 获取<p>持股比例</p>
 * @method void setShareholdingRatio(string $ShareholdingRatio) 设置<p>持股比例</p>
 */
class Equity extends AbstractModel
{
    /**
     * @var string <p>企业ID</p>
     */
    public $EnterpriseUid;

    /**
     * @var string <p>名称</p>
     */
    public $Name;

    /**
     * @var string <p>持股比例</p>
     */
    public $ShareholdingRatio;

    /**
     * @param string $EnterpriseUid <p>企业ID</p>
     * @param string $Name <p>名称</p>
     * @param string $ShareholdingRatio <p>持股比例</p>
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
        if (array_key_exists("EnterpriseUid",$param) and $param["EnterpriseUid"] !== null) {
            $this->EnterpriseUid = $param["EnterpriseUid"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ShareholdingRatio",$param) and $param["ShareholdingRatio"] !== null) {
            $this->ShareholdingRatio = $param["ShareholdingRatio"];
        }
    }
}
