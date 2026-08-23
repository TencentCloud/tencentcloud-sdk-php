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
 * DescribeSkillScanAlertDetail请求参数结构体
 *
 * @method integer getID() 获取<p>告警记录 ID<br>取值参考：通过 DescribeSkillScanAlertList 接口获取</p>
 * @method void setID(integer $ID) 设置<p>告警记录 ID<br>取值参考：通过 DescribeSkillScanAlertList 接口获取</p>
 * @method array getMemberId() 获取集团账号的成员 id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员 id
 */
class DescribeSkillScanAlertDetailRequest extends AbstractModel
{
    /**
     * @var integer <p>告警记录 ID<br>取值参考：通过 DescribeSkillScanAlertList 接口获取</p>
     */
    public $ID;

    /**
     * @var array 集团账号的成员 id
     */
    public $MemberId;

    /**
     * @param integer $ID <p>告警记录 ID<br>取值参考：通过 DescribeSkillScanAlertList 接口获取</p>
     * @param array $MemberId 集团账号的成员 id
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
