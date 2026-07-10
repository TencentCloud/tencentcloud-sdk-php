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
 * @method integer getOffset() 获取<p>偏移量，默认值为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认值为0。</p>
 * @method integer getLimit() 获取<p>限制数量，默认值为20。</p>
 * @method void setLimit(integer $Limit) 设置<p>限制数量，默认值为20。</p>
 * @method integer getDomainId() 获取<p>域名ID</p>
 * @method void setDomainId(integer $DomainId) 设置<p>域名ID</p>
 * @method array getResourceIdList() 获取<p>使用资源 ID 列表查询</p>
 * @method void setResourceIdList(array $ResourceIdList) 设置<p>使用资源 ID 列表查询</p>
 * @method string getLimitType() 获取<p>增值服务类型</p>
 * @method void setLimitType(string $LimitType) 设置<p>增值服务类型</p>
 */
class DescribeVasListRequest extends AbstractModel
{
    /**
     * @var integer <p>偏移量，默认值为0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>限制数量，默认值为20。</p>
     */
    public $Limit;

    /**
     * @var integer <p>域名ID</p>
     */
    public $DomainId;

    /**
     * @var array <p>使用资源 ID 列表查询</p>
     */
    public $ResourceIdList;

    /**
     * @var string <p>增值服务类型</p>
     */
    public $LimitType;

    /**
     * @param integer $Offset <p>偏移量，默认值为0。</p>
     * @param integer $Limit <p>限制数量，默认值为20。</p>
     * @param integer $DomainId <p>域名ID</p>
     * @param array $ResourceIdList <p>使用资源 ID 列表查询</p>
     * @param string $LimitType <p>增值服务类型</p>
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
