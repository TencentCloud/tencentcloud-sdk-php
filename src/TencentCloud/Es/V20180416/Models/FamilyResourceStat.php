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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机型族下单个机型族的资源可用性明细
 *
 * @method string getInsFamily() 获取<p>机型族，如 &quot;SA5&quot;</p>
 * @method void setInsFamily(string $InsFamily) 设置<p>机型族，如 &quot;SA5&quot;</p>
 * @method boolean getCvmAvailable() 获取<p>CVM资源是否有货</p>
 * @method void setCvmAvailable(boolean $CvmAvailable) 设置<p>CVM资源是否有货</p>
 * @method boolean getSysDiskAvailable() 获取<p>系统盘资源是否有货</p>
 * @method void setSysDiskAvailable(boolean $SysDiskAvailable) 设置<p>系统盘资源是否有货</p>
 * @method boolean getDiskAvailable() 获取<p>该盘型数据盘资源是否有货</p>
 * @method void setDiskAvailable(boolean $DiskAvailable) 设置<p>该盘型数据盘资源是否有货</p>
 * @method boolean getPurchasable() 获取<p>三类资源是否全部有货(可直接购买)</p>
 * @method void setPurchasable(boolean $Purchasable) 设置<p>三类资源是否全部有货(可直接购买)</p>
 * @method array getMissingResources() 获取<p>缺少的资源，取值 CVM/SYSDISK/DISK；为空表示不缺</p>
 * @method void setMissingResources(array $MissingResources) 设置<p>缺少的资源，取值 CVM/SYSDISK/DISK；为空表示不缺</p>
 */
class FamilyResourceStat extends AbstractModel
{
    /**
     * @var string <p>机型族，如 &quot;SA5&quot;</p>
     */
    public $InsFamily;

    /**
     * @var boolean <p>CVM资源是否有货</p>
     */
    public $CvmAvailable;

    /**
     * @var boolean <p>系统盘资源是否有货</p>
     */
    public $SysDiskAvailable;

    /**
     * @var boolean <p>该盘型数据盘资源是否有货</p>
     */
    public $DiskAvailable;

    /**
     * @var boolean <p>三类资源是否全部有货(可直接购买)</p>
     */
    public $Purchasable;

    /**
     * @var array <p>缺少的资源，取值 CVM/SYSDISK/DISK；为空表示不缺</p>
     */
    public $MissingResources;

    /**
     * @param string $InsFamily <p>机型族，如 &quot;SA5&quot;</p>
     * @param boolean $CvmAvailable <p>CVM资源是否有货</p>
     * @param boolean $SysDiskAvailable <p>系统盘资源是否有货</p>
     * @param boolean $DiskAvailable <p>该盘型数据盘资源是否有货</p>
     * @param boolean $Purchasable <p>三类资源是否全部有货(可直接购买)</p>
     * @param array $MissingResources <p>缺少的资源，取值 CVM/SYSDISK/DISK；为空表示不缺</p>
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
        if (array_key_exists("InsFamily",$param) and $param["InsFamily"] !== null) {
            $this->InsFamily = $param["InsFamily"];
        }

        if (array_key_exists("CvmAvailable",$param) and $param["CvmAvailable"] !== null) {
            $this->CvmAvailable = $param["CvmAvailable"];
        }

        if (array_key_exists("SysDiskAvailable",$param) and $param["SysDiskAvailable"] !== null) {
            $this->SysDiskAvailable = $param["SysDiskAvailable"];
        }

        if (array_key_exists("DiskAvailable",$param) and $param["DiskAvailable"] !== null) {
            $this->DiskAvailable = $param["DiskAvailable"];
        }

        if (array_key_exists("Purchasable",$param) and $param["Purchasable"] !== null) {
            $this->Purchasable = $param["Purchasable"];
        }

        if (array_key_exists("MissingResources",$param) and $param["MissingResources"] !== null) {
            $this->MissingResources = $param["MissingResources"];
        }
    }
}
