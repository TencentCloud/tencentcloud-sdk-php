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
 * 批量修复漏洞二次弹窗 漏洞主机信息
 *
 * @method integer getVulId() 获取漏洞id
 * @method void setVulId(integer $VulId) 设置漏洞id
 * @method string getVulName() 获取漏洞名称
 * @method void setVulName(string $VulName) 设置漏洞名称
 * @method array getHostList() 获取该漏洞可修复的主机信息
 * @method void setHostList(array $HostList) 设置该漏洞可修复的主机信息
 * @method array getFixTag() 获取修复提示tag
 * @method void setFixTag(array $FixTag) 设置修复提示tag
 * @method integer getVulCategory() 获取漏洞分类1 web cms漏洞,2应用漏洞,4linux软件漏洞,5windows系统漏洞
 * @method void setVulCategory(integer $VulCategory) 设置漏洞分类1 web cms漏洞,2应用漏洞,4linux软件漏洞,5windows系统漏洞
 */
class CanFixVulInfo extends AbstractModel
{
    /**
     * @var integer 漏洞id
     */
    public $VulId;

    /**
     * @var string 漏洞名称
     */
    public $VulName;

    /**
     * @var array 该漏洞可修复的主机信息
     */
    public $HostList;

    /**
     * @var array 修复提示tag
     */
    public $FixTag;

    /**
     * @var integer 漏洞分类1 web cms漏洞,2应用漏洞,4linux软件漏洞,5windows系统漏洞
     */
    public $VulCategory;

    /**
     * @param integer $VulId 漏洞id
     * @param string $VulName 漏洞名称
     * @param array $HostList 该漏洞可修复的主机信息
     * @param array $FixTag 修复提示tag
     * @param integer $VulCategory 漏洞分类1 web cms漏洞,2应用漏洞,4linux软件漏洞,5windows系统漏洞
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
        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("HostList",$param) and $param["HostList"] !== null) {
            $this->HostList = [];
            foreach ($param["HostList"] as $key => $value){
                $obj = new VulInfoHostInfo();
                $obj->deserialize($value);
                array_push($this->HostList, $obj);
            }
        }

        if (array_key_exists("FixTag",$param) and $param["FixTag"] !== null) {
            $this->FixTag = $param["FixTag"];
        }

        if (array_key_exists("VulCategory",$param) and $param["VulCategory"] !== null) {
            $this->VulCategory = $param["VulCategory"];
        }
    }
}
