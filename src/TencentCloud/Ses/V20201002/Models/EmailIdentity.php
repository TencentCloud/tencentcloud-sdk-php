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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发信域名验证列表结构体
 *
 * @method string getIdentityName() 获取<p>发信域名</p>
 * @method void setIdentityName(string $IdentityName) 设置<p>发信域名</p>
 * @method string getIdentityType() 获取<p>验证类型，固定为DOMAIN</p>
 * @method void setIdentityType(string $IdentityType) 设置<p>验证类型，固定为DOMAIN</p>
 * @method boolean getSendingEnabled() 获取<p>是否已通过验证</p>
 * @method void setSendingEnabled(boolean $SendingEnabled) 设置<p>是否已通过验证</p>
 * @method integer getCurrentReputationLevel() 获取<p>当前信誉等级</p>
 * @method void setCurrentReputationLevel(integer $CurrentReputationLevel) 设置<p>当前信誉等级</p>
 * @method integer getDailyQuota() 获取<p>当日最高发信量</p>
 * @method void setDailyQuota(integer $DailyQuota) 设置<p>当日最高发信量</p>
 * @method array getSendIp() 获取<p>域名配置的独立ip</p>
 * @method void setSendIp(array $SendIp) 设置<p>域名配置的独立ip</p>
 * @method array getTagList() 获取<p>tag 标签</p>
 * @method void setTagList(array $TagList) 设置<p>tag 标签</p>
 * @method integer getDKIMOption() 获取<p>dkim位数</p><p>枚举值：</p><ul><li>0： 1024</li><li>1： 2048</li><li>2： 双签</li></ul><p>默认值：0</p>
 * @method void setDKIMOption(integer $DKIMOption) 设置<p>dkim位数</p><p>枚举值：</p><ul><li>0： 1024</li><li>1： 2048</li><li>2： 双签</li></ul><p>默认值：0</p>
 */
class EmailIdentity extends AbstractModel
{
    /**
     * @var string <p>发信域名</p>
     */
    public $IdentityName;

    /**
     * @var string <p>验证类型，固定为DOMAIN</p>
     */
    public $IdentityType;

    /**
     * @var boolean <p>是否已通过验证</p>
     */
    public $SendingEnabled;

    /**
     * @var integer <p>当前信誉等级</p>
     */
    public $CurrentReputationLevel;

    /**
     * @var integer <p>当日最高发信量</p>
     */
    public $DailyQuota;

    /**
     * @var array <p>域名配置的独立ip</p>
     */
    public $SendIp;

    /**
     * @var array <p>tag 标签</p>
     */
    public $TagList;

    /**
     * @var integer <p>dkim位数</p><p>枚举值：</p><ul><li>0： 1024</li><li>1： 2048</li><li>2： 双签</li></ul><p>默认值：0</p>
     */
    public $DKIMOption;

    /**
     * @param string $IdentityName <p>发信域名</p>
     * @param string $IdentityType <p>验证类型，固定为DOMAIN</p>
     * @param boolean $SendingEnabled <p>是否已通过验证</p>
     * @param integer $CurrentReputationLevel <p>当前信誉等级</p>
     * @param integer $DailyQuota <p>当日最高发信量</p>
     * @param array $SendIp <p>域名配置的独立ip</p>
     * @param array $TagList <p>tag 标签</p>
     * @param integer $DKIMOption <p>dkim位数</p><p>枚举值：</p><ul><li>0： 1024</li><li>1： 2048</li><li>2： 双签</li></ul><p>默认值：0</p>
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
        if (array_key_exists("IdentityName",$param) and $param["IdentityName"] !== null) {
            $this->IdentityName = $param["IdentityName"];
        }

        if (array_key_exists("IdentityType",$param) and $param["IdentityType"] !== null) {
            $this->IdentityType = $param["IdentityType"];
        }

        if (array_key_exists("SendingEnabled",$param) and $param["SendingEnabled"] !== null) {
            $this->SendingEnabled = $param["SendingEnabled"];
        }

        if (array_key_exists("CurrentReputationLevel",$param) and $param["CurrentReputationLevel"] !== null) {
            $this->CurrentReputationLevel = $param["CurrentReputationLevel"];
        }

        if (array_key_exists("DailyQuota",$param) and $param["DailyQuota"] !== null) {
            $this->DailyQuota = $param["DailyQuota"];
        }

        if (array_key_exists("SendIp",$param) and $param["SendIp"] !== null) {
            $this->SendIp = $param["SendIp"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagList();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("DKIMOption",$param) and $param["DKIMOption"] !== null) {
            $this->DKIMOption = $param["DKIMOption"];
        }
    }
}
