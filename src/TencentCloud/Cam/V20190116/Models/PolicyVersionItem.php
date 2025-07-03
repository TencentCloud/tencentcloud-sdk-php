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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 策略版本列表元素结构
 *
 * @method integer getVersionId() 获取策略版本号
 * @method void setVersionId(integer $VersionId) 设置策略版本号
 * @method string getCreateDate() 获取策略版本创建时间
 * @method void setCreateDate(string $CreateDate) 设置策略版本创建时间
 * @method integer getIsDefaultVersion() 获取是否是正在生效的版本。0表示不是，1表示是
 * @method void setIsDefaultVersion(integer $IsDefaultVersion) 设置是否是正在生效的版本。0表示不是，1表示是
 */
class PolicyVersionItem extends AbstractModel
{
    /**
     * @var integer 策略版本号
     */
    public $VersionId;

    /**
     * @var string 策略版本创建时间
     */
    public $CreateDate;

    /**
     * @var integer 是否是正在生效的版本。0表示不是，1表示是
     */
    public $IsDefaultVersion;

    /**
     * @param integer $VersionId 策略版本号
     * @param string $CreateDate 策略版本创建时间
     * @param integer $IsDefaultVersion 是否是正在生效的版本。0表示不是，1表示是
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
        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("CreateDate",$param) and $param["CreateDate"] !== null) {
            $this->CreateDate = $param["CreateDate"];
        }

        if (array_key_exists("IsDefaultVersion",$param) and $param["IsDefaultVersion"] !== null) {
            $this->IsDefaultVersion = $param["IsDefaultVersion"];
        }
    }
}
