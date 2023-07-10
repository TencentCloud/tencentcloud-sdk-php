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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDomain请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getGroupId() 获取域名分组ID。可以通过接口DescribeDomainGroupList查看当前域名分组信息
 * @method void setGroupId(integer $GroupId) 设置域名分组ID。可以通过接口DescribeDomainGroupList查看当前域名分组信息
 * @method string getIsMark() 获取是否星标域名，”yes”、”no” 分别代表是和否。
 * @method void setIsMark(string $IsMark) 设置是否星标域名，”yes”、”no” 分别代表是和否。
 * @method boolean getTransferSubDomain() 获取添加子域名时，是否迁移相关父域名的解析记录。不传默认为 true
 * @method void setTransferSubDomain(boolean $TransferSubDomain) 设置添加子域名时，是否迁移相关父域名的解析记录。不传默认为 true
 * @method array getTags() 获取域名绑定的标签
 * @method void setTags(array $Tags) 设置域名绑定的标签
 */
class CreateDomainRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 域名分组ID。可以通过接口DescribeDomainGroupList查看当前域名分组信息
     */
    public $GroupId;

    /**
     * @var string 是否星标域名，”yes”、”no” 分别代表是和否。
     */
    public $IsMark;

    /**
     * @var boolean 添加子域名时，是否迁移相关父域名的解析记录。不传默认为 true
     */
    public $TransferSubDomain;

    /**
     * @var array 域名绑定的标签
     */
    public $Tags;

    /**
     * @param string $Domain 域名
     * @param integer $GroupId 域名分组ID。可以通过接口DescribeDomainGroupList查看当前域名分组信息
     * @param string $IsMark 是否星标域名，”yes”、”no” 分别代表是和否。
     * @param boolean $TransferSubDomain 添加子域名时，是否迁移相关父域名的解析记录。不传默认为 true
     * @param array $Tags 域名绑定的标签
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("IsMark",$param) and $param["IsMark"] !== null) {
            $this->IsMark = $param["IsMark"];
        }

        if (array_key_exists("TransferSubDomain",$param) and $param["TransferSubDomain"] !== null) {
            $this->TransferSubDomain = $param["TransferSubDomain"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
