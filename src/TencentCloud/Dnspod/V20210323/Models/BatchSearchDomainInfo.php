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
 * 批量操作筛选域名信息
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getDomainId() 获取域名 ID
 * @method void setDomainId(integer $DomainId) 设置域名 ID
 * @method string getDomainGrade() 获取域名套餐等级
 * @method void setDomainGrade(string $DomainGrade) 设置域名套餐等级
 * @method array getRecordList() 获取记录信息列表
 * @method void setRecordList(array $RecordList) 设置记录信息列表
 */
class BatchSearchDomainInfo extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 域名 ID
     */
    public $DomainId;

    /**
     * @var string 域名套餐等级
     */
    public $DomainGrade;

    /**
     * @var array 记录信息列表
     */
    public $RecordList;

    /**
     * @param string $Domain 域名
     * @param integer $DomainId 域名 ID
     * @param string $DomainGrade 域名套餐等级
     * @param array $RecordList 记录信息列表
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("DomainGrade",$param) and $param["DomainGrade"] !== null) {
            $this->DomainGrade = $param["DomainGrade"];
        }

        if (array_key_exists("RecordList",$param) and $param["RecordList"] !== null) {
            $this->RecordList = [];
            foreach ($param["RecordList"] as $key => $value){
                $obj = new BatchSearchRecordInfo();
                $obj->deserialize($value);
                array_push($this->RecordList, $obj);
            }
        }
    }
}
