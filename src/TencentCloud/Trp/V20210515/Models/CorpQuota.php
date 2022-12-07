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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 渠道商的子企业额度使用情况
 *
 * @method integer getCorpId() 获取企业ID
 * @method void setCorpId(integer $CorpId) 设置企业ID
 * @method string getCorpName() 获取企业名称
 * @method void setCorpName(string $CorpName) 设置企业名称
 * @method Quota getQuota() 获取额度
 * @method void setQuota(Quota $Quota) 设置额度
 * @method UsageQuota getUsageQuota() 获取额度使用量
 * @method void setUsageQuota(UsageQuota $UsageQuota) 设置额度使用量
 */
class CorpQuota extends AbstractModel
{
    /**
     * @var integer 企业ID
     */
    public $CorpId;

    /**
     * @var string 企业名称
     */
    public $CorpName;

    /**
     * @var Quota 额度
     */
    public $Quota;

    /**
     * @var UsageQuota 额度使用量
     */
    public $UsageQuota;

    /**
     * @param integer $CorpId 企业ID
     * @param string $CorpName 企业名称
     * @param Quota $Quota 额度
     * @param UsageQuota $UsageQuota 额度使用量
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
        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("CorpName",$param) and $param["CorpName"] !== null) {
            $this->CorpName = $param["CorpName"];
        }

        if (array_key_exists("Quota",$param) and $param["Quota"] !== null) {
            $this->Quota = new Quota();
            $this->Quota->deserialize($param["Quota"]);
        }

        if (array_key_exists("UsageQuota",$param) and $param["UsageQuota"] !== null) {
            $this->UsageQuota = new UsageQuota();
            $this->UsageQuota->deserialize($param["UsageQuota"]);
        }
    }
}
