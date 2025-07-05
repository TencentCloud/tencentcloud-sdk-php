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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 被授权的用户信息
 *
 * @method string getUserId() 获取员工在腾讯电子签平台的唯一身份标识，为32位字符串。
 * @method void setUserId(string $UserId) 设置员工在腾讯电子签平台的唯一身份标识，为32位字符串。
 * @method string getBelongTo() 获取当前员工的归属情况，可能值是：
MainOrg：在集团企业的场景下，返回此值代表是归属主企业
CurrentOrg：在普通企业场景下返回此值；或者在集团企业的场景下，返回此值代表归属子企业
 * @method void setBelongTo(string $BelongTo) 设置当前员工的归属情况，可能值是：
MainOrg：在集团企业的场景下，返回此值代表是归属主企业
CurrentOrg：在普通企业场景下返回此值；或者在集团企业的场景下，返回此值代表归属子企业
 * @method string getMainOrganizationId() 获取集团主企业id，当前企业为集团子企业时，该字段有值
 * @method void setMainOrganizationId(string $MainOrganizationId) 设置集团主企业id，当前企业为集团子企业时，该字段有值
 */
class HasAuthUser extends AbstractModel
{
    /**
     * @var string 员工在腾讯电子签平台的唯一身份标识，为32位字符串。
     */
    public $UserId;

    /**
     * @var string 当前员工的归属情况，可能值是：
MainOrg：在集团企业的场景下，返回此值代表是归属主企业
CurrentOrg：在普通企业场景下返回此值；或者在集团企业的场景下，返回此值代表归属子企业
     */
    public $BelongTo;

    /**
     * @var string 集团主企业id，当前企业为集团子企业时，该字段有值
     */
    public $MainOrganizationId;

    /**
     * @param string $UserId 员工在腾讯电子签平台的唯一身份标识，为32位字符串。
     * @param string $BelongTo 当前员工的归属情况，可能值是：
MainOrg：在集团企业的场景下，返回此值代表是归属主企业
CurrentOrg：在普通企业场景下返回此值；或者在集团企业的场景下，返回此值代表归属子企业
     * @param string $MainOrganizationId 集团主企业id，当前企业为集团子企业时，该字段有值
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("BelongTo",$param) and $param["BelongTo"] !== null) {
            $this->BelongTo = $param["BelongTo"];
        }

        if (array_key_exists("MainOrganizationId",$param) and $param["MainOrganizationId"] !== null) {
            $this->MainOrganizationId = $param["MainOrganizationId"];
        }
    }
}
