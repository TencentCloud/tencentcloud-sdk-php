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
 * DescribeDomainVipList请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，默认值为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认值为0。
 * @method integer getLimit() 获取限制数量，默认值为20。
 * @method void setLimit(integer $Limit) 设置限制数量，默认值为20。
 * @method string getKeyword() 获取通过关键字搜索域名关联的套餐，默认值为空，为空时不作为筛选条件。
 * @method void setKeyword(string $Keyword) 设置通过关键字搜索域名关联的套餐，默认值为空，为空时不作为筛选条件。
 * @method array getResourceIdList() 获取使用资源ID列表查询
 * @method void setResourceIdList(array $ResourceIdList) 设置使用资源ID列表查询
 * @method array getGradeList() 获取需要筛选的套餐版本
 * @method void setGradeList(array $GradeList) 设置需要筛选的套餐版本
 * @method boolean getGetUnbindResource() 获取是否只获取未绑定域名套餐
 * @method void setGetUnbindResource(boolean $GetUnbindResource) 设置是否只获取未绑定域名套餐
 */
class DescribeDomainVipListRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，默认值为0。
     */
    public $Offset;

    /**
     * @var integer 限制数量，默认值为20。
     */
    public $Limit;

    /**
     * @var string 通过关键字搜索域名关联的套餐，默认值为空，为空时不作为筛选条件。
     */
    public $Keyword;

    /**
     * @var array 使用资源ID列表查询
     */
    public $ResourceIdList;

    /**
     * @var array 需要筛选的套餐版本
     */
    public $GradeList;

    /**
     * @var boolean 是否只获取未绑定域名套餐
     */
    public $GetUnbindResource;

    /**
     * @param integer $Offset 偏移量，默认值为0。
     * @param integer $Limit 限制数量，默认值为20。
     * @param string $Keyword 通过关键字搜索域名关联的套餐，默认值为空，为空时不作为筛选条件。
     * @param array $ResourceIdList 使用资源ID列表查询
     * @param array $GradeList 需要筛选的套餐版本
     * @param boolean $GetUnbindResource 是否只获取未绑定域名套餐
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("ResourceIdList",$param) and $param["ResourceIdList"] !== null) {
            $this->ResourceIdList = $param["ResourceIdList"];
        }

        if (array_key_exists("GradeList",$param) and $param["GradeList"] !== null) {
            $this->GradeList = $param["GradeList"];
        }

        if (array_key_exists("GetUnbindResource",$param) and $param["GetUnbindResource"] !== null) {
            $this->GetUnbindResource = $param["GetUnbindResource"];
        }
    }
}
