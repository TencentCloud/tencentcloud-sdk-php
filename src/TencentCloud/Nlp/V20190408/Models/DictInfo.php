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
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义词库信息
 *
 * @method string getId() 获取自定义词库ID。
 * @method void setId(string $Id) 设置自定义词库ID。
 * @method string getName() 获取自定义词库名称。
 * @method void setName(string $Name) 设置自定义词库名称。
 * @method string getCreateTime() 获取自定义词库创建时间，形式为:yyyy-mm-dd hh:mm:ss。
 * @method void setCreateTime(string $CreateTime) 设置自定义词库创建时间，形式为:yyyy-mm-dd hh:mm:ss。
 * @method string getDescription() 获取自定义词库描述信息。
 * @method void setDescription(string $Description) 设置自定义词库描述信息。
 * @method string getUpdateTime() 获取自定义词库修改时间，形式为:yyyy-mm-dd hh:mm:ss。
 * @method void setUpdateTime(string $UpdateTime) 设置自定义词库修改时间，形式为:yyyy-mm-dd hh:mm:ss。
 */
class DictInfo extends AbstractModel
{
    /**
     * @var string 自定义词库ID。
     */
    public $Id;

    /**
     * @var string 自定义词库名称。
     */
    public $Name;

    /**
     * @var string 自定义词库创建时间，形式为:yyyy-mm-dd hh:mm:ss。
     */
    public $CreateTime;

    /**
     * @var string 自定义词库描述信息。
     */
    public $Description;

    /**
     * @var string 自定义词库修改时间，形式为:yyyy-mm-dd hh:mm:ss。
     */
    public $UpdateTime;

    /**
     * @param string $Id 自定义词库ID。
     * @param string $Name 自定义词库名称。
     * @param string $CreateTime 自定义词库创建时间，形式为:yyyy-mm-dd hh:mm:ss。
     * @param string $Description 自定义词库描述信息。
     * @param string $UpdateTime 自定义词库修改时间，形式为:yyyy-mm-dd hh:mm:ss。
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
