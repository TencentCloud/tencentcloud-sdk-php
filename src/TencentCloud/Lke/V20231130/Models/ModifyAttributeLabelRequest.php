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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAttributeLabel请求参数结构体
 *
 * @method string getBotBizId() 获取应用ID
 * @method void setBotBizId(string $BotBizId) 设置应用ID
 * @method string getAttributeBizId() 获取标签ID
 * @method void setAttributeBizId(string $AttributeBizId) 设置标签ID
 * @method string getAttrName() 获取标签名称
 * @method void setAttrName(string $AttrName) 设置标签名称
 * @method string getAttrKey() 获取标签标识 （已作废）
 * @method void setAttrKey(string $AttrKey) 设置标签标识 （已作废）
 * @method string getLoginUin() 获取登录用户主账号(集成商模式必填)
 * @method void setLoginUin(string $LoginUin) 设置登录用户主账号(集成商模式必填)
 * @method string getLoginSubAccountUin() 获取登录用户子账号(集成商模式必填)
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) 设置登录用户子账号(集成商模式必填)
 * @method array getDeleteLabelBizIds() 获取删除的标签值
 * @method void setDeleteLabelBizIds(array $DeleteLabelBizIds) 设置删除的标签值
 * @method array getLabels() 获取新增或编辑的标签
 * @method void setLabels(array $Labels) 设置新增或编辑的标签
 */
class ModifyAttributeLabelRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $BotBizId;

    /**
     * @var string 标签ID
     */
    public $AttributeBizId;

    /**
     * @var string 标签名称
     */
    public $AttrName;

    /**
     * @var string 标签标识 （已作废）
     */
    public $AttrKey;

    /**
     * @var string 登录用户主账号(集成商模式必填)
     */
    public $LoginUin;

    /**
     * @var string 登录用户子账号(集成商模式必填)
     */
    public $LoginSubAccountUin;

    /**
     * @var array 删除的标签值
     */
    public $DeleteLabelBizIds;

    /**
     * @var array 新增或编辑的标签
     */
    public $Labels;

    /**
     * @param string $BotBizId 应用ID
     * @param string $AttributeBizId 标签ID
     * @param string $AttrName 标签名称
     * @param string $AttrKey 标签标识 （已作废）
     * @param string $LoginUin 登录用户主账号(集成商模式必填)
     * @param string $LoginSubAccountUin 登录用户子账号(集成商模式必填)
     * @param array $DeleteLabelBizIds 删除的标签值
     * @param array $Labels 新增或编辑的标签
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
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("AttributeBizId",$param) and $param["AttributeBizId"] !== null) {
            $this->AttributeBizId = $param["AttributeBizId"];
        }

        if (array_key_exists("AttrName",$param) and $param["AttrName"] !== null) {
            $this->AttrName = $param["AttrName"];
        }

        if (array_key_exists("AttrKey",$param) and $param["AttrKey"] !== null) {
            $this->AttrKey = $param["AttrKey"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }

        if (array_key_exists("DeleteLabelBizIds",$param) and $param["DeleteLabelBizIds"] !== null) {
            $this->DeleteLabelBizIds = $param["DeleteLabelBizIds"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new AttributeLabel();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }
    }
}
