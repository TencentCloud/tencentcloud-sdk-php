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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportCommonApplication请求参数结构体
 *
 * @method string getCommonAppUuid() 获取<p>公共应用ID</p>
 * @method void setCommonAppUuid(string $CommonAppUuid) 设置<p>公共应用ID</p>
 * @method string getCommonAppNewName() 获取<p>公共应用重命名</p>
 * @method void setCommonAppNewName(string $CommonAppNewName) 设置<p>公共应用重命名</p>
 * @method string getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
 * @method string getType() 获取<p>公共应用类型</p><p>枚举值：</p><ul><li>WDL： WDL</li><li>NEXTFLOW： NEXTFLOW</li></ul>
 * @method void setType(string $Type) 设置<p>公共应用类型</p><p>枚举值：</p><ul><li>WDL： WDL</li><li>NEXTFLOW： NEXTFLOW</li></ul>
 * @method string getNextflowVersion() 获取<p>NEXTFLOW版本</p>
 * @method void setNextflowVersion(string $NextflowVersion) 设置<p>NEXTFLOW版本</p>
 * @method boolean getInternal() 获取<p>是否内部应用</p>
 * @method void setInternal(boolean $Internal) 设置<p>是否内部应用</p>
 */
class ImportCommonApplicationRequest extends AbstractModel
{
    /**
     * @var string <p>公共应用ID</p>
     */
    public $CommonAppUuid;

    /**
     * @var string <p>公共应用重命名</p>
     */
    public $CommonAppNewName;

    /**
     * @var string <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>公共应用类型</p><p>枚举值：</p><ul><li>WDL： WDL</li><li>NEXTFLOW： NEXTFLOW</li></ul>
     */
    public $Type;

    /**
     * @var string <p>NEXTFLOW版本</p>
     */
    public $NextflowVersion;

    /**
     * @var boolean <p>是否内部应用</p>
     */
    public $Internal;

    /**
     * @param string $CommonAppUuid <p>公共应用ID</p>
     * @param string $CommonAppNewName <p>公共应用重命名</p>
     * @param string $ProjectId <p>项目ID</p>
     * @param string $Type <p>公共应用类型</p><p>枚举值：</p><ul><li>WDL： WDL</li><li>NEXTFLOW： NEXTFLOW</li></ul>
     * @param string $NextflowVersion <p>NEXTFLOW版本</p>
     * @param boolean $Internal <p>是否内部应用</p>
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
        if (array_key_exists("CommonAppUuid",$param) and $param["CommonAppUuid"] !== null) {
            $this->CommonAppUuid = $param["CommonAppUuid"];
        }

        if (array_key_exists("CommonAppNewName",$param) and $param["CommonAppNewName"] !== null) {
            $this->CommonAppNewName = $param["CommonAppNewName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("NextflowVersion",$param) and $param["NextflowVersion"] !== null) {
            $this->NextflowVersion = $param["NextflowVersion"];
        }

        if (array_key_exists("Internal",$param) and $param["Internal"] !== null) {
            $this->Internal = $param["Internal"];
        }
    }
}
