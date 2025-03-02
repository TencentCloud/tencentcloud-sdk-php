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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 参与方填写控件信息
 *
 * @method string getRecipientId() 获取签署方经办人在合同流程中的参与方ID，与控件绑定，是控件的归属方
 * @method void setRecipientId(string $RecipientId) 设置签署方经办人在合同流程中的参与方ID，与控件绑定，是控件的归属方
 * @method string getRecipientFillStatus() 获取参与方填写状态
<ul>
<li>**空值** : 此参与方没有填写控件</li>
<li>**0**:  未填写, 表示此参与方还没有填写合同的填写控件</li>
<li>**1**:  已填写, 表示此参与方已经填写所有的填写控件</li></ul>

 * @method void setRecipientFillStatus(string $RecipientFillStatus) 设置参与方填写状态
<ul>
<li>**空值** : 此参与方没有填写控件</li>
<li>**0**:  未填写, 表示此参与方还没有填写合同的填写控件</li>
<li>**1**:  已填写, 表示此参与方已经填写所有的填写控件</li></ul>

 * @method boolean getIsPromoter() 获取是否为发起方
<ul><li>true-发起方</li>
<li>false-参与方</li></ul>
 * @method void setIsPromoter(boolean $IsPromoter) 设置是否为发起方
<ul><li>true-发起方</li>
<li>false-参与方</li></ul>
 * @method array getComponents() 获取改参与方填写控件信息列表
 * @method void setComponents(array $Components) 设置改参与方填写控件信息列表
 */
class RecipientComponentInfo extends AbstractModel
{
    /**
     * @var string 签署方经办人在合同流程中的参与方ID，与控件绑定，是控件的归属方
     */
    public $RecipientId;

    /**
     * @var string 参与方填写状态
<ul>
<li>**空值** : 此参与方没有填写控件</li>
<li>**0**:  未填写, 表示此参与方还没有填写合同的填写控件</li>
<li>**1**:  已填写, 表示此参与方已经填写所有的填写控件</li></ul>

     */
    public $RecipientFillStatus;

    /**
     * @var boolean 是否为发起方
<ul><li>true-发起方</li>
<li>false-参与方</li></ul>
     */
    public $IsPromoter;

    /**
     * @var array 改参与方填写控件信息列表
     */
    public $Components;

    /**
     * @param string $RecipientId 签署方经办人在合同流程中的参与方ID，与控件绑定，是控件的归属方
     * @param string $RecipientFillStatus 参与方填写状态
<ul>
<li>**空值** : 此参与方没有填写控件</li>
<li>**0**:  未填写, 表示此参与方还没有填写合同的填写控件</li>
<li>**1**:  已填写, 表示此参与方已经填写所有的填写控件</li></ul>

     * @param boolean $IsPromoter 是否为发起方
<ul><li>true-发起方</li>
<li>false-参与方</li></ul>
     * @param array $Components 改参与方填写控件信息列表
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
        if (array_key_exists("RecipientId",$param) and $param["RecipientId"] !== null) {
            $this->RecipientId = $param["RecipientId"];
        }

        if (array_key_exists("RecipientFillStatus",$param) and $param["RecipientFillStatus"] !== null) {
            $this->RecipientFillStatus = $param["RecipientFillStatus"];
        }

        if (array_key_exists("IsPromoter",$param) and $param["IsPromoter"] !== null) {
            $this->IsPromoter = $param["IsPromoter"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = [];
            foreach ($param["Components"] as $key => $value){
                $obj = new FilledComponent();
                $obj->deserialize($value);
                array_push($this->Components, $obj);
            }
        }
    }
}
