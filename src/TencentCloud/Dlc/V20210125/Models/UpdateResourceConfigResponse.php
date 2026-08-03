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
 * UpdateResourceConfig返回参数结构体
 *
 * @method string getId() 获取模板ID
 * @method void setId(string $Id) 设置模板ID
 * @method string getName() 获取模板名称
 * @method void setName(string $Name) 设置模板名称
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method HeadSpecDTO getHead() 获取Head节点配置
 * @method void setHead(HeadSpecDTO $Head) 设置Head节点配置
 * @method array getWorker() 获取Worker节点配置
 * @method void setWorker(array $Worker) 设置Worker节点配置
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method integer getUpdateTime() 获取更新时间
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
 * @method string getType() 获取模板类型
 * @method void setType(string $Type) 设置模板类型
 * @method integer getAppId() 获取应用ID
 * @method void setAppId(integer $AppId) 设置应用ID
 * @method string getUin() 获取创建者UIN
 * @method void setUin(string $Uin) 设置创建者UIN
 * @method string getSubAccountUin() 获取子用户UIN
 * @method void setSubAccountUin(string $SubAccountUin) 设置子用户UIN
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class UpdateResourceConfigResponse extends AbstractModel
{
    /**
     * @var string 模板ID
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
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 模板类型
     */
    public $Type;

    /**
     * @var integer 应用ID
     */
    public $AppId;

    /**
     * @var string 创建者UIN
     */
    public $Uin;

    /**
     * @var string 子用户UIN
     */
    public $SubAccountUin;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Id 模板ID
     * @param string $Name 模板名称
     * @param string $Description 描述
     * @param HeadSpecDTO $Head Head节点配置
     * @param array $Worker Worker节点配置
     * @param integer $CreateTime 创建时间
     * @param integer $UpdateTime 更新时间
     * @param string $Type 模板类型
     * @param integer $AppId 应用ID
     * @param string $Uin 创建者UIN
     * @param string $SubAccountUin 子用户UIN
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
