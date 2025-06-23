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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RegisterDsEventPublisher注册事件发布者参数
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getKey() 获取任务id
 * @method void setKey(string $Key) 设置任务id
 * @method string getType() 获取类型 REST_API、KAFKA
 * @method void setType(string $Type) 设置类型 REST_API、KAFKA
 * @method array getProperties() 获取配置信息
 * @method void setProperties(array $Properties) 设置配置信息
 * @method string getDescription() 获取描述信息
 * @method void setDescription(string $Description) 设置描述信息
 */
class RegisterDsEventPublisherReq extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 任务id
     */
    public $Key;

    /**
     * @var string 类型 REST_API、KAFKA
     */
    public $Type;

    /**
     * @var array 配置信息
     */
    public $Properties;

    /**
     * @var string 描述信息
     */
    public $Description;

    /**
     * @param string $ProjectId 项目id
     * @param string $Key 任务id
     * @param string $Type 类型 REST_API、KAFKA
     * @param array $Properties 配置信息
     * @param string $Description 描述信息
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

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new ParamInfoDs();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
