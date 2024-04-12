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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 聊天详情Refer
 *
 * @method string getId() 获取id
 * @method void setId(string $Id) 设置id
 * @method string getUrl() 获取链接
 * @method void setUrl(string $Url) 设置链接
 * @method integer getType() 获取类型
 * @method void setType(integer $Type) 设置类型
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getDocId() 获取来源文档ID
 * @method void setDocId(string $DocId) 设置来源文档ID
 */
class MsgRecordReference extends AbstractModel
{
    /**
     * @var string id
     */
    public $Id;

    /**
     * @var string 链接
     */
    public $Url;

    /**
     * @var integer 类型
     */
    public $Type;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 来源文档ID
     */
    public $DocId;

    /**
     * @param string $Id id
     * @param string $Url 链接
     * @param integer $Type 类型
     * @param string $Name 名称
     * @param string $DocId 来源文档ID
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

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DocId",$param) and $param["DocId"] !== null) {
            $this->DocId = $param["DocId"];
        }
    }
}
