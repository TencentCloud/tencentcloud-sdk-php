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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddRealServers请求参数结构体
 *
 * @method integer getProjectId() 获取<p>源站对应的项目ID</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>源站对应的项目ID</p>
 * @method array getRealServerIP() 获取<p>源站对应的IP或域名</p>
 * @method void setRealServerIP(array $RealServerIP) 设置<p>源站对应的IP或域名</p>
 * @method string getRealServerName() 获取<p>源站名称</p>
 * @method void setRealServerName(string $RealServerName) 设置<p>源站名称</p>
 * @method array getTagSet() 获取<p>标签列表</p>
 * @method void setTagSet(array $TagSet) 设置<p>标签列表</p>
 */
class AddRealServersRequest extends AbstractModel
{
    /**
     * @var integer <p>源站对应的项目ID</p>
     */
    public $ProjectId;

    /**
     * @var array <p>源站对应的IP或域名</p>
     */
    public $RealServerIP;

    /**
     * @var string <p>源站名称</p>
     */
    public $RealServerName;

    /**
     * @var array <p>标签列表</p>
     */
    public $TagSet;

    /**
     * @param integer $ProjectId <p>源站对应的项目ID</p>
     * @param array $RealServerIP <p>源站对应的IP或域名</p>
     * @param string $RealServerName <p>源站名称</p>
     * @param array $TagSet <p>标签列表</p>
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

        if (array_key_exists("RealServerIP",$param) and $param["RealServerIP"] !== null) {
            $this->RealServerIP = $param["RealServerIP"];
        }

        if (array_key_exists("RealServerName",$param) and $param["RealServerName"] !== null) {
            $this->RealServerName = $param["RealServerName"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new TagPair();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }
    }
}
