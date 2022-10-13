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
 * ModifyMerchant请求参数结构体
 *
 * @method string getName() 获取商户名称
 * @method void setName(string $Name) 设置商户名称
 * @method string getMerchantId() 获取商户标识码
 * @method void setMerchantId(string $MerchantId) 设置商户标识码
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method integer getCorpId() 获取企业ID
 * @method void setCorpId(integer $CorpId) 设置企业ID
 * @method integer getCodeType() 获取码包来源 0:自建, 1:第三码包，暂不支持修改
 * @method void setCodeType(integer $CodeType) 设置码包来源 0:自建, 1:第三码包，暂不支持修改
 * @method string getCodeUrl() 获取码包前缀地址 第三方码包时必填
 * @method void setCodeUrl(string $CodeUrl) 设置码包前缀地址 第三方码包时必填
 */
class ModifyMerchantRequest extends AbstractModel
{
    /**
     * @var string 商户名称
     */
    public $Name;

    /**
     * @var string 商户标识码
     */
    public $MerchantId;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var integer 企业ID
     */
    public $CorpId;

    /**
     * @var integer 码包来源 0:自建, 1:第三码包，暂不支持修改
     */
    public $CodeType;

    /**
     * @var string 码包前缀地址 第三方码包时必填
     */
    public $CodeUrl;

    /**
     * @param string $Name 商户名称
     * @param string $MerchantId 商户标识码
     * @param string $Remark 备注
     * @param integer $CorpId 企业ID
     * @param integer $CodeType 码包来源 0:自建, 1:第三码包，暂不支持修改
     * @param string $CodeUrl 码包前缀地址 第三方码包时必填
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MerchantId",$param) and $param["MerchantId"] !== null) {
            $this->MerchantId = $param["MerchantId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("CodeType",$param) and $param["CodeType"] !== null) {
            $this->CodeType = $param["CodeType"];
        }

        if (array_key_exists("CodeUrl",$param) and $param["CodeUrl"] !== null) {
            $this->CodeUrl = $param["CodeUrl"];
        }
    }
}
