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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMetaDatabase请求参数结构体
 *
 * @method integer getCatalogId() 获取无
 * @method void setCatalogId(integer $CatalogId) 设置无
 * @method string getDatabaseName() 获取库名
 * @method void setDatabaseName(string $DatabaseName) 设置库名
 * @method string getComment() 获取备注
 * @method void setComment(string $Comment) 设置备注
 * @method string getWorkSpaceId() 获取工作空间 SerialId
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置工作空间 SerialId
 */
class CreateMetaDatabaseRequest extends AbstractModel
{
    /**
     * @var integer 无
     */
    public $CatalogId;

    /**
     * @var string 库名
     */
    public $DatabaseName;

    /**
     * @var string 备注
     */
    public $Comment;

    /**
     * @var string 工作空间 SerialId
     */
    public $WorkSpaceId;

    /**
     * @param integer $CatalogId 无
     * @param string $DatabaseName 库名
     * @param string $Comment 备注
     * @param string $WorkSpaceId 工作空间 SerialId
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
        if (array_key_exists("CatalogId",$param) and $param["CatalogId"] !== null) {
            $this->CatalogId = $param["CatalogId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }
    }
}
