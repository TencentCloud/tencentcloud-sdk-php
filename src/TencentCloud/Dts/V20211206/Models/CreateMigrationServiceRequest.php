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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMigrationService请求参数结构体
 *
 * @method string getSrcDatabaseType() 获取源实例数据库类型，mysql,redis,percona,mongodb,postgresql,sqlserver,mariadb
 * @method void setSrcDatabaseType(string $SrcDatabaseType) 设置源实例数据库类型，mysql,redis,percona,mongodb,postgresql,sqlserver,mariadb
 * @method string getDstDatabaseType() 获取目标实例数据库类型，mysql,redis,percona,mongodb,postgresql,sqlserver,mariadb
 * @method void setDstDatabaseType(string $DstDatabaseType) 设置目标实例数据库类型，mysql,redis,percona,mongodb,postgresql,sqlserver,mariadb
 * @method string getSrcRegion() 获取源实例地域，如：ap-guangzhou
 * @method void setSrcRegion(string $SrcRegion) 设置源实例地域，如：ap-guangzhou
 * @method string getDstRegion() 获取目标实例地域，如：ap-guangzhou。注意，目标地域必须和API请求地域保持一致。
 * @method void setDstRegion(string $DstRegion) 设置目标实例地域，如：ap-guangzhou。注意，目标地域必须和API请求地域保持一致。
 * @method string getInstanceClass() 获取实例规格，包括：small、medium、large、xlarge、2xlarge
 * @method void setInstanceClass(string $InstanceClass) 设置实例规格，包括：small、medium、large、xlarge、2xlarge
 * @method integer getCount() 获取购买数量，范围为[1,15]，默认为1
 * @method void setCount(integer $Count) 设置购买数量，范围为[1,15]，默认为1
 * @method string getJobName() 获取迁移服务名称，最大长度128
 * @method void setJobName(string $JobName) 设置迁移服务名称，最大长度128
 * @method array getTags() 获取标签信息
 * @method void setTags(array $Tags) 设置标签信息
 */
class CreateMigrationServiceRequest extends AbstractModel
{
    /**
     * @var string 源实例数据库类型，mysql,redis,percona,mongodb,postgresql,sqlserver,mariadb
     */
    public $SrcDatabaseType;

    /**
     * @var string 目标实例数据库类型，mysql,redis,percona,mongodb,postgresql,sqlserver,mariadb
     */
    public $DstDatabaseType;

    /**
     * @var string 源实例地域，如：ap-guangzhou
     */
    public $SrcRegion;

    /**
     * @var string 目标实例地域，如：ap-guangzhou。注意，目标地域必须和API请求地域保持一致。
     */
    public $DstRegion;

    /**
     * @var string 实例规格，包括：small、medium、large、xlarge、2xlarge
     */
    public $InstanceClass;

    /**
     * @var integer 购买数量，范围为[1,15]，默认为1
     */
    public $Count;

    /**
     * @var string 迁移服务名称，最大长度128
     */
    public $JobName;

    /**
     * @var array 标签信息
     */
    public $Tags;

    /**
     * @param string $SrcDatabaseType 源实例数据库类型，mysql,redis,percona,mongodb,postgresql,sqlserver,mariadb
     * @param string $DstDatabaseType 目标实例数据库类型，mysql,redis,percona,mongodb,postgresql,sqlserver,mariadb
     * @param string $SrcRegion 源实例地域，如：ap-guangzhou
     * @param string $DstRegion 目标实例地域，如：ap-guangzhou。注意，目标地域必须和API请求地域保持一致。
     * @param string $InstanceClass 实例规格，包括：small、medium、large、xlarge、2xlarge
     * @param integer $Count 购买数量，范围为[1,15]，默认为1
     * @param string $JobName 迁移服务名称，最大长度128
     * @param array $Tags 标签信息
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
