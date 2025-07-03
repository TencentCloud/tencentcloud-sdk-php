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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * pod信息
 *
 * @method string getWebshell() 获取webshell链接
 * @method void setWebshell(string $Webshell) 设置webshell链接
 * @method string getPodId() 获取pod name
 * @method void setPodId(string $PodId) 设置pod name
 * @method string getPodIp() 获取pod ip
 * @method void setPodIp(string $PodIp) 设置pod ip
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 */
class CloudBaseRunVersionPod extends AbstractModel
{
    /**
     * @var string webshell链接
     */
    public $Webshell;

    /**
     * @var string pod name
     */
    public $PodId;

    /**
     * @var string pod ip
     */
    public $PodIp;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @param string $Webshell webshell链接
     * @param string $PodId pod name
     * @param string $PodIp pod ip
     * @param string $Status 状态
     * @param string $CreateTime 创建时间
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
        if (array_key_exists("Webshell",$param) and $param["Webshell"] !== null) {
            $this->Webshell = $param["Webshell"];
        }

        if (array_key_exists("PodId",$param) and $param["PodId"] !== null) {
            $this->PodId = $param["PodId"];
        }

        if (array_key_exists("PodIp",$param) and $param["PodIp"] !== null) {
            $this->PodIp = $param["PodIp"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
