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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扫描ip信息
 *
 * @method string getBussiness() 获取所属业务

 * @method void setBussiness(string $Bussiness) 设置所属业务

 * @method string getTarget() 获取扫描对象
 * @method void setTarget(string $Target) 设置扫描对象
 * @method array getIpList() 获取ip列表
 * @method void setIpList(array $IpList) 设置ip列表
 * @method string getDescibe() 获取扫描说明
 * @method void setDescibe(string $Descibe) 设置扫描说明
 * @method string getReferer() 获取官方公告

 * @method void setReferer(string $Referer) 设置官方公告

 * @method integer getUpdateTime() 获取更新时间
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
 */
class ScanIpInfo extends AbstractModel
{
    /**
     * @var string 所属业务

     */
    public $Bussiness;

    /**
     * @var string 扫描对象
     */
    public $Target;

    /**
     * @var array ip列表
     */
    public $IpList;

    /**
     * @var string 扫描说明
     */
    public $Descibe;

    /**
     * @var string 官方公告

     */
    public $Referer;

    /**
     * @var integer 更新时间
     */
    public $UpdateTime;

    /**
     * @param string $Bussiness 所属业务

     * @param string $Target 扫描对象
     * @param array $IpList ip列表
     * @param string $Descibe 扫描说明
     * @param string $Referer 官方公告

     * @param integer $UpdateTime 更新时间
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
        if (array_key_exists("Bussiness",$param) and $param["Bussiness"] !== null) {
            $this->Bussiness = $param["Bussiness"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }

        if (array_key_exists("Descibe",$param) and $param["Descibe"] !== null) {
            $this->Descibe = $param["Descibe"];
        }

        if (array_key_exists("Referer",$param) and $param["Referer"] !== null) {
            $this->Referer = $param["Referer"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
