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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulFixStatus请求参数结构体
 *
 * @method integer getFixId() 获取任务id 传VulId可以不用传FixId
 * @method void setFixId(integer $FixId) 设置任务id 传VulId可以不用传FixId
 * @method integer getVulId() 获取漏洞id 传FixId可以不用传VulId
 * @method void setVulId(integer $VulId) 设置漏洞id 传FixId可以不用传VulId
 * @method string getQuuid() 获取主机quuid 和VulId 组合可查 某主机最近一次修复任务详情
 * @method void setQuuid(string $Quuid) 设置主机quuid 和VulId 组合可查 某主机最近一次修复任务详情
 * @method integer getKbId() 获取补丁 id
 * @method void setKbId(integer $KbId) 设置补丁 id
 */
class DescribeVulFixStatusRequest extends AbstractModel
{
    /**
     * @var integer 任务id 传VulId可以不用传FixId
     */
    public $FixId;

    /**
     * @var integer 漏洞id 传FixId可以不用传VulId
     */
    public $VulId;

    /**
     * @var string 主机quuid 和VulId 组合可查 某主机最近一次修复任务详情
     */
    public $Quuid;

    /**
     * @var integer 补丁 id
     */
    public $KbId;

    /**
     * @param integer $FixId 任务id 传VulId可以不用传FixId
     * @param integer $VulId 漏洞id 传FixId可以不用传VulId
     * @param string $Quuid 主机quuid 和VulId 组合可查 某主机最近一次修复任务详情
     * @param integer $KbId 补丁 id
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
        if (array_key_exists("FixId",$param) and $param["FixId"] !== null) {
            $this->FixId = $param["FixId"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }
    }
}
