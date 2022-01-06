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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 外部联系人简短信息
 *
 * @method string getExternalUserId() 获取外部联系人的userId
 * @method void setExternalUserId(string $ExternalUserId) 设置外部联系人的userId
 * @method string getUserId() 获取添加了此外部联系人的企业成员userId
 * @method void setUserId(string $UserId) 设置添加了此外部联系人的企业成员userId
 * @method string getSalesName() 获取添加了此外部联系人的企业成员的姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSalesName(string $SalesName) 设置添加了此外部联系人的企业成员的姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDepartmentIdList() 获取添加了此外部联系人的企业成员的归属部门id列表
 * @method void setDepartmentIdList(array $DepartmentIdList) 设置添加了此外部联系人的企业成员的归属部门id列表
 */
class ExternalContactSimpleInfo extends AbstractModel
{
    /**
     * @var string 外部联系人的userId
     */
    public $ExternalUserId;

    /**
     * @var string 添加了此外部联系人的企业成员userId
     */
    public $UserId;

    /**
     * @var string 添加了此外部联系人的企业成员的姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SalesName;

    /**
     * @var array 添加了此外部联系人的企业成员的归属部门id列表
     */
    public $DepartmentIdList;

    /**
     * @param string $ExternalUserId 外部联系人的userId
     * @param string $UserId 添加了此外部联系人的企业成员userId
     * @param string $SalesName 添加了此外部联系人的企业成员的姓名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DepartmentIdList 添加了此外部联系人的企业成员的归属部门id列表
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
        if (array_key_exists("ExternalUserId",$param) and $param["ExternalUserId"] !== null) {
            $this->ExternalUserId = $param["ExternalUserId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("SalesName",$param) and $param["SalesName"] !== null) {
            $this->SalesName = $param["SalesName"];
        }

        if (array_key_exists("DepartmentIdList",$param) and $param["DepartmentIdList"] !== null) {
            $this->DepartmentIdList = $param["DepartmentIdList"];
        }
    }
}
