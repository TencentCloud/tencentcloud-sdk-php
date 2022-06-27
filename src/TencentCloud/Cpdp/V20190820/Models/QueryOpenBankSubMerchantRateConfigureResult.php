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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 子商户费率配置查询结果
 *
 * @method string getDealStatus() 获取处理状态 
SUCCESS: 开通成功 
FAILED: 开通失败
PROCESSING: 开通中
 * @method void setDealStatus(string $DealStatus) 设置处理状态 
SUCCESS: 开通成功 
FAILED: 开通失败
PROCESSING: 开通中
 * @method string getDealMessage() 获取处理描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDealMessage(string $DealMessage) 设置处理描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class QueryOpenBankSubMerchantRateConfigureResult extends AbstractModel
{
    /**
     * @var string 处理状态 
SUCCESS: 开通成功 
FAILED: 开通失败
PROCESSING: 开通中
     */
    public $DealStatus;

    /**
     * @var string 处理描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DealMessage;

    /**
     * @param string $DealStatus 处理状态 
SUCCESS: 开通成功 
FAILED: 开通失败
PROCESSING: 开通中
     * @param string $DealMessage 处理描述
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("DealStatus",$param) and $param["DealStatus"] !== null) {
            $this->DealStatus = $param["DealStatus"];
        }

        if (array_key_exists("DealMessage",$param) and $param["DealMessage"] !== null) {
            $this->DealMessage = $param["DealMessage"];
        }
    }
}
