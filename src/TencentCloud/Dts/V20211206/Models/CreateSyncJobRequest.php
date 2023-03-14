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
 * CreateSyncJob请求参数结构体
 *
 * @method string getPayMode() 获取付款类型, 如：PrePay(表示包年包月)、PostPay(表示按时按量)
 * @method void setPayMode(string $PayMode) 设置付款类型, 如：PrePay(表示包年包月)、PostPay(表示按时按量)
 * @method string getSrcDatabaseType() 获取源端数据库类型,如mysql,cynosdbmysql,tdapg,tdpg,tdsqlmysql等
 * @method void setSrcDatabaseType(string $SrcDatabaseType) 设置源端数据库类型,如mysql,cynosdbmysql,tdapg,tdpg,tdsqlmysql等
 * @method string getSrcRegion() 获取源端数据库所在地域,如ap-guangzhou
 * @method void setSrcRegion(string $SrcRegion) 设置源端数据库所在地域,如ap-guangzhou
 * @method string getDstDatabaseType() 获取目标端数据库类型,如mysql,cynosdbmysql,tdapg,tdpg,tdsqlmysql,kafka等
 * @method void setDstDatabaseType(string $DstDatabaseType) 设置目标端数据库类型,如mysql,cynosdbmysql,tdapg,tdpg,tdsqlmysql,kafka等
 * @method string getDstRegion() 获取目标端数据库所在地域,如ap-guangzhou
 * @method void setDstRegion(string $DstRegion) 设置目标端数据库所在地域,如ap-guangzhou
 * @method string getSpecification() 获取同步任务规格，Standard:标准版
 * @method void setSpecification(string $Specification) 设置同步任务规格，Standard:标准版
 * @method array getTags() 获取标签信息
 * @method void setTags(array $Tags) 设置标签信息
 * @method integer getCount() 获取一次购买的同步任务数量，取值范围为[1, 10]，默认为1
 * @method void setCount(integer $Count) 设置一次购买的同步任务数量，取值范围为[1, 10]，默认为1
 * @method integer getAutoRenew() 获取自动续费标识，当PayMode值为PrePay则此项配置有意义，取值为：1（表示自动续费）、0（不自动续费，默认为此值）
 * @method void setAutoRenew(integer $AutoRenew) 设置自动续费标识，当PayMode值为PrePay则此项配置有意义，取值为：1（表示自动续费）、0（不自动续费，默认为此值）
 * @method string getInstanceClass() 获取同步链路规格，如micro,small,medium,large，默认为medium
 * @method void setInstanceClass(string $InstanceClass) 设置同步链路规格，如micro,small,medium,large，默认为medium
 * @method string getJobName() 获取同步任务名称
 * @method void setJobName(string $JobName) 设置同步任务名称
 * @method string getExistedJobId() 获取创建类似任务的现有任务Id
 * @method void setExistedJobId(string $ExistedJobId) 设置创建类似任务的现有任务Id
 */
class CreateSyncJobRequest extends AbstractModel
{
    /**
     * @var string 付款类型, 如：PrePay(表示包年包月)、PostPay(表示按时按量)
     */
    public $PayMode;

    /**
     * @var string 源端数据库类型,如mysql,cynosdbmysql,tdapg,tdpg,tdsqlmysql等
     */
    public $SrcDatabaseType;

    /**
     * @var string 源端数据库所在地域,如ap-guangzhou
     */
    public $SrcRegion;

    /**
     * @var string 目标端数据库类型,如mysql,cynosdbmysql,tdapg,tdpg,tdsqlmysql,kafka等
     */
    public $DstDatabaseType;

    /**
     * @var string 目标端数据库所在地域,如ap-guangzhou
     */
    public $DstRegion;

    /**
     * @var string 同步任务规格，Standard:标准版
     */
    public $Specification;

    /**
     * @var array 标签信息
     */
    public $Tags;

    /**
     * @var integer 一次购买的同步任务数量，取值范围为[1, 10]，默认为1
     */
    public $Count;

    /**
     * @var integer 自动续费标识，当PayMode值为PrePay则此项配置有意义，取值为：1（表示自动续费）、0（不自动续费，默认为此值）
     */
    public $AutoRenew;

    /**
     * @var string 同步链路规格，如micro,small,medium,large，默认为medium
     */
    public $InstanceClass;

    /**
     * @var string 同步任务名称
     */
    public $JobName;

    /**
     * @var string 创建类似任务的现有任务Id
     */
    public $ExistedJobId;

    /**
     * @param string $PayMode 付款类型, 如：PrePay(表示包年包月)、PostPay(表示按时按量)
     * @param string $SrcDatabaseType 源端数据库类型,如mysql,cynosdbmysql,tdapg,tdpg,tdsqlmysql等
     * @param string $SrcRegion 源端数据库所在地域,如ap-guangzhou
     * @param string $DstDatabaseType 目标端数据库类型,如mysql,cynosdbmysql,tdapg,tdpg,tdsqlmysql,kafka等
     * @param string $DstRegion 目标端数据库所在地域,如ap-guangzhou
     * @param string $Specification 同步任务规格，Standard:标准版
     * @param array $Tags 标签信息
     * @param integer $Count 一次购买的同步任务数量，取值范围为[1, 10]，默认为1
     * @param integer $AutoRenew 自动续费标识，当PayMode值为PrePay则此项配置有意义，取值为：1（表示自动续费）、0（不自动续费，默认为此值）
     * @param string $InstanceClass 同步链路规格，如micro,small,medium,large，默认为medium
     * @param string $JobName 同步任务名称
     * @param string $ExistedJobId 创建类似任务的现有任务Id
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
        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("SrcDatabaseType",$param) and $param["SrcDatabaseType"] !== null) {
            $this->SrcDatabaseType = $param["SrcDatabaseType"];
        }

        if (array_key_exists("SrcRegion",$param) and $param["SrcRegion"] !== null) {
            $this->SrcRegion = $param["SrcRegion"];
        }

        if (array_key_exists("DstDatabaseType",$param) and $param["DstDatabaseType"] !== null) {
            $this->DstDatabaseType = $param["DstDatabaseType"];
        }

        if (array_key_exists("DstRegion",$param) and $param["DstRegion"] !== null) {
            $this->DstRegion = $param["DstRegion"];
        }

        if (array_key_exists("Specification",$param) and $param["Specification"] !== null) {
            $this->Specification = $param["Specification"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("InstanceClass",$param) and $param["InstanceClass"] !== null) {
            $this->InstanceClass = $param["InstanceClass"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("ExistedJobId",$param) and $param["ExistedJobId"] !== null) {
            $this->ExistedJobId = $param["ExistedJobId"];
        }
    }
}
