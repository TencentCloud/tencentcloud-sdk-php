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
 * 漏洞情报数据
 *
 * @method string getLevel() 获取风险等级
high 高危/ middle 中危 / low 低危 /info 提示
 * @method void setLevel(string $Level) 设置风险等级
high 高危/ middle 中危 / low 低危 /info 提示
 * @method string getSubmitTime() 获取漏洞披露时间
 * @method void setSubmitTime(string $SubmitTime) 设置漏洞披露时间
 * @method string getVULName() 获取漏洞名
 * @method void setVULName(string $VULName) 设置漏洞名
 * @method string getVULID() 获取cveID/tvdID/ssvid
 * @method void setVULID(string $VULID) 设置cveID/tvdID/ssvid
 */
class VulInfoListItem extends AbstractModel
{
    /**
     * @var string 风险等级
high 高危/ middle 中危 / low 低危 /info 提示
     */
    public $Level;

    /**
     * @var string 漏洞披露时间
     */
    public $SubmitTime;

    /**
     * @var string 漏洞名
     */
    public $VULName;

    /**
     * @var string cveID/tvdID/ssvid
     */
    public $VULID;

    /**
     * @param string $Level 风险等级
high 高危/ middle 中危 / low 低危 /info 提示
     * @param string $SubmitTime 漏洞披露时间
     * @param string $VULName 漏洞名
     * @param string $VULID cveID/tvdID/ssvid
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
        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("SubmitTime",$param) and $param["SubmitTime"] !== null) {
            $this->SubmitTime = $param["SubmitTime"];
        }

        if (array_key_exists("VULName",$param) and $param["VULName"] !== null) {
            $this->VULName = $param["VULName"];
        }

        if (array_key_exists("VULID",$param) and $param["VULID"] !== null) {
            $this->VULID = $param["VULID"];
        }
    }
}
