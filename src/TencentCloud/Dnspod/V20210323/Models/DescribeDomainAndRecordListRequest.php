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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDomainAndRecordList请求参数结构体
 *
 * @method string getAllDomain() 获取搜索所有域名。AllDomain、GroupIdList、DomainList、DomainIdList 参数传任一个即可。优先级为：AllDomain > GroupIdList  > DomainList > DomainIdList。
 * @method void setAllDomain(string $AllDomain) 设置搜索所有域名。AllDomain、GroupIdList、DomainList、DomainIdList 参数传任一个即可。优先级为：AllDomain > GroupIdList  > DomainList > DomainIdList。
 * @method array getDomainList() 获取要搜索的域名列表。
 * @method void setDomainList(array $DomainList) 设置要搜索的域名列表。
 * @method array getDomainIdList() 获取要搜索的域名 ID 列表。
 * @method void setDomainIdList(array $DomainIdList) 设置要搜索的域名 ID 列表。
 * @method array getGroupIdList() 获取要搜索的域名分组 ID 列表。
 * @method void setGroupIdList(array $GroupIdList) 设置要搜索的域名分组 ID 列表。
 * @method string getRecordType() 获取记录类型筛选
 * @method void setRecordType(string $RecordType) 设置记录类型筛选
 * @method string getSubKeyword() 获取子域名筛选
 * @method void setSubKeyword(string $SubKeyword) 设置子域名筛选
 * @method string getValueKeyword() 获取记录值筛选
 * @method void setValueKeyword(string $ValueKeyword) 设置记录值筛选
 * @method string getArea() 获取线路筛选
 * @method void setArea(string $Area) 设置线路筛选
 * @method string getRemark() 获取备注筛选
 * @method void setRemark(string $Remark) 设置备注筛选
 * @method string getEnabled() 获取记录状态筛选
1：正常
0：暂停

 * @method void setEnabled(string $Enabled) 设置记录状态筛选
1：正常
0：暂停
 */
class DescribeDomainAndRecordListRequest extends AbstractModel
{
    /**
     * @var string 搜索所有域名。AllDomain、GroupIdList、DomainList、DomainIdList 参数传任一个即可。优先级为：AllDomain > GroupIdList  > DomainList > DomainIdList。
     */
    public $AllDomain;

    /**
     * @var array 要搜索的域名列表。
     */
    public $DomainList;

    /**
     * @var array 要搜索的域名 ID 列表。
     */
    public $DomainIdList;

    /**
     * @var array 要搜索的域名分组 ID 列表。
     */
    public $GroupIdList;

    /**
     * @var string 记录类型筛选
     */
    public $RecordType;

    /**
     * @var string 子域名筛选
     */
    public $SubKeyword;

    /**
     * @var string 记录值筛选
     */
    public $ValueKeyword;

    /**
     * @var string 线路筛选
     */
    public $Area;

    /**
     * @var string 备注筛选
     */
    public $Remark;

    /**
     * @var string 记录状态筛选
1：正常
0：暂停

     */
    public $Enabled;

    /**
     * @param string $AllDomain 搜索所有域名。AllDomain、GroupIdList、DomainList、DomainIdList 参数传任一个即可。优先级为：AllDomain > GroupIdList  > DomainList > DomainIdList。
     * @param array $DomainList 要搜索的域名列表。
     * @param array $DomainIdList 要搜索的域名 ID 列表。
     * @param array $GroupIdList 要搜索的域名分组 ID 列表。
     * @param string $RecordType 记录类型筛选
     * @param string $SubKeyword 子域名筛选
     * @param string $ValueKeyword 记录值筛选
     * @param string $Area 线路筛选
     * @param string $Remark 备注筛选
     * @param string $Enabled 记录状态筛选
1：正常
0：暂停
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
        if (array_key_exists("AllDomain",$param) and $param["AllDomain"] !== null) {
            $this->AllDomain = $param["AllDomain"];
        }

        if (array_key_exists("DomainList",$param) and $param["DomainList"] !== null) {
            $this->DomainList = $param["DomainList"];
        }

        if (array_key_exists("DomainIdList",$param) and $param["DomainIdList"] !== null) {
            $this->DomainIdList = $param["DomainIdList"];
        }

        if (array_key_exists("GroupIdList",$param) and $param["GroupIdList"] !== null) {
            $this->GroupIdList = $param["GroupIdList"];
        }

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("SubKeyword",$param) and $param["SubKeyword"] !== null) {
            $this->SubKeyword = $param["SubKeyword"];
        }

        if (array_key_exists("ValueKeyword",$param) and $param["ValueKeyword"] !== null) {
            $this->ValueKeyword = $param["ValueKeyword"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
