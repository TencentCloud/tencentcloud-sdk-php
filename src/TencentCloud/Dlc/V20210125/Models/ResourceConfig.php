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
 * 资源配置响应
 *
 * @method string getId() 获取<p>模板ID</p>
 * @method void setId(string $Id) 设置<p>模板ID</p>
 * @method string getName() 获取<p>模板名称</p>
 * @method void setName(string $Name) 设置<p>模板名称</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getType() 获取<p>模板类型(ray,spark)</p>
 * @method void setType(string $Type) 设置<p>模板类型(ray,spark)</p>
 * @method HeadSpecDTO getHead() 获取<p>Head节点配置</p>
 * @method void setHead(HeadSpecDTO $Head) 设置<p>Head节点配置</p>
 * @method array getWorker() 获取<p>Worker节点配置</p>
 * @method void setWorker(array $Worker) 设置<p>Worker节点配置</p>
 * @method integer getAppId() 获取<p>应用ID</p>
 * @method void setAppId(integer $AppId) 设置<p>应用ID</p>
 * @method string getUin() 获取<p>创建者UIN</p>
 * @method void setUin(string $Uin) 设置<p>创建者UIN</p>
 * @method string getSubAccountUin() 获取<p>子用户UIN</p>
 * @method void setSubAccountUin(string $SubAccountUin) 设置<p>子用户UIN</p>
 * @method integer getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间</p>
 * @method integer getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间</p>
 */
class ResourceConfig extends AbstractModel
{
    /**
     * @var string <p>模板ID</p>
     */
    public $Id;

    /**
     * @var string <p>模板名称</p>
     */
    public $Name;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>模板类型(ray,spark)</p>
     */
    public $Type;

    /**
     * @var HeadSpecDTO <p>Head节点配置</p>
     */
    public $Head;

    /**
     * @var array <p>Worker节点配置</p>
     */
    public $Worker;

    /**
     * @var integer <p>应用ID</p>
     */
    public $AppId;

    /**
     * @var string <p>创建者UIN</p>
     */
    public $Uin;

    /**
     * @var string <p>子用户UIN</p>
     */
    public $SubAccountUin;

    /**
     * @var integer <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @param string $Id <p>模板ID</p>
     * @param string $Name <p>模板名称</p>
     * @param string $Description <p>描述</p>
     * @param string $Type <p>模板类型(ray,spark)</p>
     * @param HeadSpecDTO $Head <p>Head节点配置</p>
     * @param array $Worker <p>Worker节点配置</p>
     * @param integer $AppId <p>应用ID</p>
     * @param string $Uin <p>创建者UIN</p>
     * @param string $SubAccountUin <p>子用户UIN</p>
     * @param integer $CreateTime <p>创建时间</p>
     * @param integer $UpdateTime <p>更新时间</p>
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
