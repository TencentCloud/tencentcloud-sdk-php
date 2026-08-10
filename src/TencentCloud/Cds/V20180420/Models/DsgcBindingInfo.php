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
namespace TencentCloud\Cds\V20180420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资产 DSGC 绑定信息
 *
 * @method string getDspaId() 获取dspa实例id
 * @method void setDspaId(string $DspaId) 设置dspa实例id
 * @method integer getDspaCgId() 获取dspa绑定模板/合规组 id ComplianceGroupId
 * @method void setDspaCgId(integer $DspaCgId) 设置dspa绑定模板/合规组 id ComplianceGroupId
 * @method string getDspaCgName() 获取dspa绑定模板/合规组名称
 * @method void setDspaCgName(string $DspaCgName) 设置dspa绑定模板/合规组名称
 * @method integer getDspaStatus() 获取dspa实例状态 0 正常 1 隔离 2 销毁
 * @method void setDspaStatus(integer $DspaStatus) 设置dspa实例状态 0 正常 1 隔离 2 销毁
 * @method integer getDspaCgStatus() 获取模板状态 0: 正常   1: 已删除
 * @method void setDspaCgStatus(integer $DspaCgStatus) 设置模板状态 0: 正常   1: 已删除
 */
class DsgcBindingInfo extends AbstractModel
{
    /**
     * @var string dspa实例id
     */
    public $DspaId;

    /**
     * @var integer dspa绑定模板/合规组 id ComplianceGroupId
     */
    public $DspaCgId;

    /**
     * @var string dspa绑定模板/合规组名称
     */
    public $DspaCgName;

    /**
     * @var integer dspa实例状态 0 正常 1 隔离 2 销毁
     */
    public $DspaStatus;

    /**
     * @var integer 模板状态 0: 正常   1: 已删除
     */
    public $DspaCgStatus;

    /**
     * @param string $DspaId dspa实例id
     * @param integer $DspaCgId dspa绑定模板/合规组 id ComplianceGroupId
     * @param string $DspaCgName dspa绑定模板/合规组名称
     * @param integer $DspaStatus dspa实例状态 0 正常 1 隔离 2 销毁
     * @param integer $DspaCgStatus 模板状态 0: 正常   1: 已删除
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("DspaCgId",$param) and $param["DspaCgId"] !== null) {
            $this->DspaCgId = $param["DspaCgId"];
        }

        if (array_key_exists("DspaCgName",$param) and $param["DspaCgName"] !== null) {
            $this->DspaCgName = $param["DspaCgName"];
        }

        if (array_key_exists("DspaStatus",$param) and $param["DspaStatus"] !== null) {
            $this->DspaStatus = $param["DspaStatus"];
        }

        if (array_key_exists("DspaCgStatus",$param) and $param["DspaCgStatus"] !== null) {
            $this->DspaCgStatus = $param["DspaCgStatus"];
        }
    }
}
