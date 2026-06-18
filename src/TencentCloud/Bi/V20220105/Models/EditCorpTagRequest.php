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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EditCorpTag请求参数结构体
 *
 * @method integer getId() 获取标签ID
 * @method void setId(integer $Id) 设置标签ID
 * @method string getName() 获取标签名称
 * @method void setName(string $Name) 设置标签名称
 * @method string getImportType() 获取导入标签的模式(manual/auto)
 * @method void setImportType(string $ImportType) 设置导入标签的模式(manual/auto)
 * @method integer getAutoImportTagTableId() 获取自动导入标签表的id
 * @method void setAutoImportTagTableId(integer $AutoImportTagTableId) 设置自动导入标签表的id
 * @method string getAutoImportField() 获取自动导入标签的关联字段
 * @method void setAutoImportField(string $AutoImportField) 设置自动导入标签的关联字段
 * @method boolean getAsyncRequest() 获取是否异步请求
 * @method void setAsyncRequest(boolean $AsyncRequest) 设置是否异步请求
 * @method string getAutoImportTagTableName() 获取自动导入标签表的表名
 * @method void setAutoImportTagTableName(string $AutoImportTagTableName) 设置自动导入标签表的表名
 * @method string getTranId() 获取事务id
 * @method void setTranId(string $TranId) 设置事务id
 */
class EditCorpTagRequest extends AbstractModel
{
    /**
     * @var integer 标签ID
     */
    public $Id;

    /**
     * @var string 标签名称
     */
    public $Name;

    /**
     * @var string 导入标签的模式(manual/auto)
     */
    public $ImportType;

    /**
     * @var integer 自动导入标签表的id
     */
    public $AutoImportTagTableId;

    /**
     * @var string 自动导入标签的关联字段
     */
    public $AutoImportField;

    /**
     * @var boolean 是否异步请求
     */
    public $AsyncRequest;

    /**
     * @var string 自动导入标签表的表名
     */
    public $AutoImportTagTableName;

    /**
     * @var string 事务id
     */
    public $TranId;

    /**
     * @param integer $Id 标签ID
     * @param string $Name 标签名称
     * @param string $ImportType 导入标签的模式(manual/auto)
     * @param integer $AutoImportTagTableId 自动导入标签表的id
     * @param string $AutoImportField 自动导入标签的关联字段
     * @param boolean $AsyncRequest 是否异步请求
     * @param string $AutoImportTagTableName 自动导入标签表的表名
     * @param string $TranId 事务id
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ImportType",$param) and $param["ImportType"] !== null) {
            $this->ImportType = $param["ImportType"];
        }

        if (array_key_exists("AutoImportTagTableId",$param) and $param["AutoImportTagTableId"] !== null) {
            $this->AutoImportTagTableId = $param["AutoImportTagTableId"];
        }

        if (array_key_exists("AutoImportField",$param) and $param["AutoImportField"] !== null) {
            $this->AutoImportField = $param["AutoImportField"];
        }

        if (array_key_exists("AsyncRequest",$param) and $param["AsyncRequest"] !== null) {
            $this->AsyncRequest = $param["AsyncRequest"];
        }

        if (array_key_exists("AutoImportTagTableName",$param) and $param["AutoImportTagTableName"] !== null) {
            $this->AutoImportTagTableName = $param["AutoImportTagTableName"];
        }

        if (array_key_exists("TranId",$param) and $param["TranId"] !== null) {
            $this->TranId = $param["TranId"];
        }
    }
}
