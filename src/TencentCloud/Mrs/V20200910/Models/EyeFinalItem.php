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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 眼科子结构 平均后结果
 *
 * @method BaseItem3 getSph() 获取<p>球镜</p>
 * @method void setSph(BaseItem3 $Sph) 设置<p>球镜</p>
 * @method BaseItem3 getCyl() 获取<p>柱镜</p>
 * @method void setCyl(BaseItem3 $Cyl) 设置<p>柱镜</p>
 * @method BaseItem3 getAx() 获取<p>轴位</p>
 * @method void setAx(BaseItem3 $Ax) 设置<p>轴位</p>
 * @method BaseItem2 getSe() 获取<p>等效球镜</p>
 * @method void setSe(BaseItem2 $Se) 设置<p>等效球镜</p>
 */
class EyeFinalItem extends AbstractModel
{
    /**
     * @var BaseItem3 <p>球镜</p>
     */
    public $Sph;

    /**
     * @var BaseItem3 <p>柱镜</p>
     */
    public $Cyl;

    /**
     * @var BaseItem3 <p>轴位</p>
     */
    public $Ax;

    /**
     * @var BaseItem2 <p>等效球镜</p>
     */
    public $Se;

    /**
     * @param BaseItem3 $Sph <p>球镜</p>
     * @param BaseItem3 $Cyl <p>柱镜</p>
     * @param BaseItem3 $Ax <p>轴位</p>
     * @param BaseItem2 $Se <p>等效球镜</p>
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
        if (array_key_exists("Sph",$param) and $param["Sph"] !== null) {
            $this->Sph = new BaseItem3();
            $this->Sph->deserialize($param["Sph"]);
        }

        if (array_key_exists("Cyl",$param) and $param["Cyl"] !== null) {
            $this->Cyl = new BaseItem3();
            $this->Cyl->deserialize($param["Cyl"]);
        }

        if (array_key_exists("Ax",$param) and $param["Ax"] !== null) {
            $this->Ax = new BaseItem3();
            $this->Ax->deserialize($param["Ax"]);
        }

        if (array_key_exists("Se",$param) and $param["Se"] !== null) {
            $this->Se = new BaseItem2();
            $this->Se->deserialize($param["Se"]);
        }
    }
}
