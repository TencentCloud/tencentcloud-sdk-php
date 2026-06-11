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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMigrationService请求参数结构体
 *
 * @method string getSrcDatabaseType() 获取<p>源实例数据库类型，如mysql,redis,percona,mongodb,postgresql,sqlserver,mariadb,cynosdbmysql(表示TDSQL-C MySQL数据库)tdsqlmysql,keewidb,tdstore</p><p>枚举值：</p><ul><li>mysql： MySQL数据库</li></ul>
 * @method void setSrcDatabaseType(string $SrcDatabaseType) 设置<p>源实例数据库类型，如mysql,redis,percona,mongodb,postgresql,sqlserver,mariadb,cynosdbmysql(表示TDSQL-C MySQL数据库)tdsqlmysql,keewidb,tdstore</p><p>枚举值：</p><ul><li>mysql： MySQL数据库</li></ul>
 * @method string getDstDatabaseType() 获取<p>目标实例数据库类型，如mysql,redis,percona,mongodb,postgresql,sqlserver,mariadb,cynosdbmysql(表示TDSQL-C MySQL数据库)tdsqlmysql,keewidb,tdstore,tendis</p><p>枚举值：</p><ul><li>mysql： MySQL数据库</li></ul>
 * @method void setDstDatabaseType(string $DstDatabaseType) 设置<p>目标实例数据库类型，如mysql,redis,percona,mongodb,postgresql,sqlserver,mariadb,cynosdbmysql(表示TDSQL-C MySQL数据库)tdsqlmysql,keewidb,tdstore,tendis</p><p>枚举值：</p><ul><li>mysql： MySQL数据库</li></ul>
 * @method string getSrcRegion() 获取<p>源实例地域，如：ap-guangzhou</p>
 * @method void setSrcRegion(string $SrcRegion) 设置<p>源实例地域，如：ap-guangzhou</p>
 * @method string getDstRegion() 获取<p>目标实例地域，如：ap-guangzhou。注意，目标地域必须和API请求地域保持一致。</p>
 * @method void setDstRegion(string $DstRegion) 设置<p>目标实例地域，如：ap-guangzhou。注意，目标地域必须和API请求地域保持一致。</p>
 * @method string getInstanceClass() 获取<p>实例规格，包括：small、medium、large、xlarge、2xlarge。当前未计费链路仅支持medium字段值。不同规格类型参考<a href="https://cloud.tencent.com/document/product/571/18736">计费概述</a></p>
 * @method void setInstanceClass(string $InstanceClass) 设置<p>实例规格，包括：small、medium、large、xlarge、2xlarge。当前未计费链路仅支持medium字段值。不同规格类型参考<a href="https://cloud.tencent.com/document/product/571/18736">计费概述</a></p>
 * @method integer getCount() 获取<p>购买数量，范围为[1,15]，默认为1</p>
 * @method void setCount(integer $Count) 设置<p>购买数量，范围为[1,15]，默认为1</p>
 * @method string getJobName() 获取<p>迁移服务名称，最大长度128</p>
 * @method void setJobName(string $JobName) 设置<p>迁移服务名称，最大长度128</p>
 * @method array getTags() 获取<p>标签信息</p>
 * @method void setTags(array $Tags) 设置<p>标签信息</p>
 */
class CreateMigrationServiceRequest extends AbstractModel
{
    /**
     * @var string <p>源实例数据库类型，如mysql,redis,percona,mongodb,postgresql,sqlserver,mariadb,cynosdbmysql(表示TDSQL-C MySQL数据库)tdsqlmysql,keewidb,tdstore</p><p>枚举值：</p><ul><li>mysql： MySQL数据库</li></ul>
     */
    public $SrcDatabaseType;

    /**
     * @var string <p>目标实例数据库类型，如mysql,redis,percona,mongodb,postgresql,sqlserver,mariadb,cynosdbmysql(表示TDSQL-C MySQL数据库)tdsqlmysql,keewidb,tdstore,tendis</p><p>枚举值：</p><ul><li>mysql： MySQL数据库</li></ul>
     */
    public $DstDatabaseType;

    /**
     * @var string <p>源实例地域，如：ap-guangzhou</p>
     */
    public $SrcRegion;

    /**
     * @var string <p>目标实例地域，如：ap-guangzhou。注意，目标地域必须和API请求地域保持一致。</p>
     */
    public $DstRegion;

    /**
     * @var string <p>实例规格，包括：small、medium、large、xlarge、2xlarge。当前未计费链路仅支持medium字段值。不同规格类型参考<a href="https://cloud.tencent.com/document/product/571/18736">计费概述</a></p>
     */
    public $InstanceClass;

    /**
     * @var integer <p>购买数量，范围为[1,15]，默认为1</p>
     */
    public $Count;

    /**
     * @var string <p>迁移服务名称，最大长度128</p>
     */
    public $JobName;

    /**
     * @var array <p>标签信息</p>
     */
    public $Tags;

    /**
     * @param string $SrcDatabaseType <p>源实例数据库类型，如mysql,redis,percona,mongodb,postgresql,sqlserver,mariadb,cynosdbmysql(表示TDSQL-C MySQL数据库)tdsqlmysql,keewidb,tdstore</p><p>枚举值：</p><ul><li>mysql： MySQL数据库</li></ul>
     * @param string $DstDatabaseType <p>目标实例数据库类型，如mysql,redis,percona,mongodb,postgresql,sqlserver,mariadb,cynosdbmysql(表示TDSQL-C MySQL数据库)tdsqlmysql,keewidb,tdstore,tendis</p><p>枚举值：</p><ul><li>mysql： MySQL数据库</li></ul>
     * @param string $SrcRegion <p>源实例地域，如：ap-guangzhou</p>
     * @param string $DstRegion <p>目标实例地域，如：ap-guangzhou。注意，目标地域必须和API请求地域保持一致。</p>
     * @param string $InstanceClass <p>实例规格，包括：small、medium、large、xlarge、2xlarge。当前未计费链路仅支持medium字段值。不同规格类型参考<a href="https://cloud.tencent.com/document/product/571/18736">计费概述</a></p>
     * @param integer $Count <p>购买数量，范围为[1,15]，默认为1</p>
     * @param string $JobName <p>迁移服务名称，最大长度128</p>
     * @param array $Tags <p>标签信息</p>
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
        if (array_key_exists("SrcDatabaseType",$param) and $param["SrcDatabaseType"] !== null) {
            $this->SrcDatabaseType = $param["SrcDatabaseType"];
        }

        if (array_key_exists("DstDatabaseType",$param) and $param["DstDatabaseType"] !== null) {
            $this->DstDatabaseType = $param["DstDatabaseType"];
        }

        if (array_key_exists("SrcRegion",$param) and $param["SrcRegion"] !== null) {
            $this->SrcRegion = $param["SrcRegion"];
        }

        if (array_key_exists("DstRegion",$param) and $param["DstRegion"] !== null) {
            $this->DstRegion = $param["DstRegion"];
        }

        if (array_key_exists("InstanceClass",$param) and $param["InstanceClass"] !== null) {
            $this->InstanceClass = $param["InstanceClass"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
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
