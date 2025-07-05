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
namespace TencentCloud\Rce\V20201103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 黑白名单详情出参
 *
 * @method integer getNameListId() 获取名单ID
 * @method void setNameListId(integer $NameListId) 设置名单ID
 * @method string getListName() 获取名单名称
 * @method void setListName(string $ListName) 设置名单名称
 * @method integer getListType() 获取名单类型 [1 黑名单 2 白名单]
 * @method void setListType(integer $ListType) 设置名单类型 [1 黑名单 2 白名单]
 * @method integer getDataType() 获取数据类型[1 手机号 2 qqOpenId 3 2echatOpenId 4 ip 6 idfa 7 imei]
 * @method void setDataType(integer $DataType) 设置数据类型[1 手机号 2 qqOpenId 3 2echatOpenId 4 ip 6 idfa 7 imei]
 * @method string getSceneCode() 获取场景Code
 * @method void setSceneCode(string $SceneCode) 设置场景Code
 * @method integer getStatus() 获取名单列表状态 [1 启用 2 停用]
 * @method void setStatus(integer $Status) 设置名单列表状态 [1 启用 2 停用]
 * @method string getRemark() 获取描述
 * @method void setRemark(string $Remark) 设置描述
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method integer getEncryptionType() 获取加密类型 [0 无需加密，1 MD5加密，2 SHA256加密]
 * @method void setEncryptionType(integer $EncryptionType) 设置加密类型 [0 无需加密，1 MD5加密，2 SHA256加密]
 */
class OutputDescribeNameListDetail extends AbstractModel
{
    /**
     * @var integer 名单ID
     */
    public $NameListId;

    /**
     * @var string 名单名称
     */
    public $ListName;

    /**
     * @var integer 名单类型 [1 黑名单 2 白名单]
     */
    public $ListType;

    /**
     * @var integer 数据类型[1 手机号 2 qqOpenId 3 2echatOpenId 4 ip 6 idfa 7 imei]
     */
    public $DataType;

    /**
     * @var string 场景Code
     */
    public $SceneCode;

    /**
     * @var integer 名单列表状态 [1 启用 2 停用]
     */
    public $Status;

    /**
     * @var string 描述
     */
    public $Remark;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var integer 加密类型 [0 无需加密，1 MD5加密，2 SHA256加密]
     */
    public $EncryptionType;

    /**
     * @param integer $NameListId 名单ID
     * @param string $ListName 名单名称
     * @param integer $ListType 名单类型 [1 黑名单 2 白名单]
     * @param integer $DataType 数据类型[1 手机号 2 qqOpenId 3 2echatOpenId 4 ip 6 idfa 7 imei]
     * @param string $SceneCode 场景Code
     * @param integer $Status 名单列表状态 [1 启用 2 停用]
     * @param string $Remark 描述
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param integer $EncryptionType 加密类型 [0 无需加密，1 MD5加密，2 SHA256加密]
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
        if (array_key_exists("NameListId",$param) and $param["NameListId"] !== null) {
            $this->NameListId = $param["NameListId"];
        }

        if (array_key_exists("ListName",$param) and $param["ListName"] !== null) {
            $this->ListName = $param["ListName"];
        }

        if (array_key_exists("ListType",$param) and $param["ListType"] !== null) {
            $this->ListType = $param["ListType"];
        }

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }

        if (array_key_exists("SceneCode",$param) and $param["SceneCode"] !== null) {
            $this->SceneCode = $param["SceneCode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("EncryptionType",$param) and $param["EncryptionType"] !== null) {
            $this->EncryptionType = $param["EncryptionType"];
        }
    }
}
