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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 版本Pod实例信息
 *
 * @method string getWebshell() 获取实例webshell链接
 * @method void setWebshell(string $Webshell) 设置实例webshell链接
 * @method string getPodId() 获取实例Id
 * @method void setPodId(string $PodId) 设置实例Id
 * @method string getStatus() 获取实例状态
 * @method void setStatus(string $Status) 设置实例状态
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 */
class VersionPodInstance extends AbstractModel
{
    /**
     * @var string 实例webshell链接
     */
    public $Webshell;

    /**
     * @var string 实例Id
     */
    public $PodId;

    /**
     * @var string 实例状态
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @param string $Webshell 实例webshell链接
     * @param string $PodId 实例Id
     * @param string $Status 实例状态
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
