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
 * DescribeVasList请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，默认值为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认值为0。
 * @method integer getLimit() 获取限制数量，默认值为20。
 * @method void setLimit(integer $Limit) 设置限制数量，默认值为20。
 * @method integer getDomainId() 获取域名ID
 * @method void setDomainId(integer $DomainId) 设置域名ID
 * @method array getResourceIdList() 获取使用资源 ID 列表查询
 * @method void setResourceIdList(array $ResourceIdList) 设置使用资源 ID 列表查询
 * @method string getLimitType() 获取增值服务类型
 * @method void setLimitType(string $LimitType) 设置增值服务类型
 */
class DescribeVasListRequest extends AbstractModel
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
     * @var integer 域名ID
     */
    public $DomainId;

    /**
     * @var array 使用资源 ID 列表查询
     */
    public $ResourceIdList;

    /**
     * @var string 增值服务类型
     */
    public $LimitType;

    /**
     * @param integer $Offset 偏移量，默认值为0。
     * @param integer $Limit 限制数量，默认值为20。
     * @param integer $DomainId 域名ID
     * @param array $ResourceIdList 使用资源 ID 列表查询
     * @param string $LimitType 增值服务类型
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

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("ResourceIdList",$param) and $param["ResourceIdList"] !== null) {
            $this->ResourceIdList = $param["ResourceIdList"];
        }

        if (array_key_exists("LimitType",$param) and $param["LimitType"] !== null) {
            $this->LimitType = $param["LimitType"];
        }
    }
}
