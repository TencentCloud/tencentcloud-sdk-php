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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 审计实例详情
 *
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method array getTagList() 获取标签信息
 * @method void setTagList(array $TagList) 设置标签信息
 * @method string getDbType() 获取数据库内核类型
 * @method void setDbType(string $DbType) 设置数据库内核类型
 * @method string getDbVersion() 获取数据库内核版本
 * @method void setDbVersion(string $DbVersion) 设置数据库内核版本
 */
class AuditInstanceInfo extends AbstractModel
{
    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var array 标签信息
     */
    public $TagList;

    /**
     * @var string 数据库内核类型
     */
    public $DbType;

    /**
     * @var string 数据库内核版本
     */
    public $DbVersion;

    /**
     * @param integer $ProjectId 项目ID
     * @param array $TagList 标签信息
     * @param string $DbType 数据库内核类型
     * @param string $DbVersion 数据库内核版本
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagInfoUnit();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }
    }
}
