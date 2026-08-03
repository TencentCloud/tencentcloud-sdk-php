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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateResourceConfig请求参数结构体
 *
 * @method string getId() 获取资源配置模板Id
 * @method void setId(string $Id) 设置资源配置模板Id
 * @method string getName() 获取模板名称
 * @method void setName(string $Name) 设置模板名称
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method HeadSpecDTO getHead() 获取Head节点配置
 * @method void setHead(HeadSpecDTO $Head) 设置Head节点配置
 * @method array getWorker() 获取Worker节点配置
 * @method void setWorker(array $Worker) 设置Worker节点配置
 * @method string getType() 获取模板类型(不传默认Ray)
 * @method void setType(string $Type) 设置模板类型(不传默认Ray)
 */
class UpdateResourceConfigRequest extends AbstractModel
{
    /**
     * @var string 资源配置模板Id
     */
    public $Id;

    /**
     * @var string 模板名称
     */
    public $Name;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var HeadSpecDTO Head节点配置
     */
    public $Head;

    /**
     * @var array Worker节点配置
     */
    public $Worker;

    /**
     * @var string 模板类型(不传默认Ray)
     */
    public $Type;

    /**
     * @param string $Id 资源配置模板Id
     * @param string $Name 模板名称
     * @param string $Description 描述
     * @param HeadSpecDTO $Head Head节点配置
     * @param array $Worker Worker节点配置
     * @param string $Type 模板类型(不传默认Ray)
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Head",$param) and $param["Head"] !== null) {
            $this->Head = new HeadSpecDTO();
            $this->Head->deserialize($param["Head"]);
        }

        if (array_key_exists("Worker",$param) and $param["Worker"] !== null) {
            $this->Worker = [];
            foreach ($param["Worker"] as $key => $value){
                $obj = new WorkerSpecDTO();
                $obj->deserialize($value);
                array_push($this->Worker, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
