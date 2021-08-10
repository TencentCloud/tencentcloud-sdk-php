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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCustomizedConfigAssociateList请求参数结构体
 *
 * @method string getUconfigId() 获取配置ID
 * @method void setUconfigId(string $UconfigId) 设置配置ID
 * @method integer getOffset() 获取拉取绑定关系列表开始位置，默认值 0
 * @method void setOffset(integer $Offset) 设置拉取绑定关系列表开始位置，默认值 0
 * @method integer getLimit() 获取拉取绑定关系列表数目，默认值 20
 * @method void setLimit(integer $Limit) 设置拉取绑定关系列表数目，默认值 20
 * @method string getDomain() 获取搜索域名
 * @method void setDomain(string $Domain) 设置搜索域名
 */
class DescribeCustomizedConfigAssociateListRequest extends AbstractModel
{
    /**
     * @var string 配置ID
     */
    public $UconfigId;

    /**
     * @var integer 拉取绑定关系列表开始位置，默认值 0
     */
    public $Offset;

    /**
     * @var integer 拉取绑定关系列表数目，默认值 20
     */
    public $Limit;

    /**
     * @var string 搜索域名
     */
    public $Domain;

    /**
     * @param string $UconfigId 配置ID
     * @param integer $Offset 拉取绑定关系列表开始位置，默认值 0
     * @param integer $Limit 拉取绑定关系列表数目，默认值 20
     * @param string $Domain 搜索域名
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
        if (array_key_exists("UconfigId",$param) and $param["UconfigId"] !== null) {
            $this->UconfigId = $param["UconfigId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
