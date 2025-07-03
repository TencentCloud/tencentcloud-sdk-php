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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 协议端口模板信息
 *
 * @method string getService() 获取协议端口。
 * @method void setService(string $Service) 设置协议端口。
 * @method string getDescription() 获取备注。
 * @method void setDescription(string $Description) 设置备注。
 * @method string getUpdatedTime() 获取更新时间。
 * @method void setUpdatedTime(string $UpdatedTime) 设置更新时间。
 */
class ServicesInfo extends AbstractModel
{
    /**
     * @var string 协议端口。
     */
    public $Service;

    /**
     * @var string 备注。
     */
    public $Description;

    /**
     * @var string 更新时间。
     */
    public $UpdatedTime;

    /**
     * @param string $Service 协议端口。
     * @param string $Description 备注。
     * @param string $UpdatedTime 更新时间。
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
        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }
    }
}
