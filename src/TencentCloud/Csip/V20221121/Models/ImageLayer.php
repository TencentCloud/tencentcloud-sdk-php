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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像层信息
 *
 * @method integer getLayerIndex() 获取<p>镜像层序号</p>
 * @method void setLayerIndex(integer $LayerIndex) 设置<p>镜像层序号</p>
 * @method string getLayerId() 获取<p>镜像层id</p>
 * @method void setLayerId(string $LayerId) 设置<p>镜像层id</p>
 * @method string getLayerCmd() 获取<p>镜像层命令行</p>
 * @method void setLayerCmd(string $LayerCmd) 设置<p>镜像层命令行</p>
 * @method integer getSize() 获取<p>镜像层大小</p>
 * @method void setSize(integer $Size) 设置<p>镜像层大小</p>
 * @method integer getCriticalLevelVulCnt() 获取<p>严重漏洞数</p>
 * @method void setCriticalLevelVulCnt(integer $CriticalLevelVulCnt) 设置<p>严重漏洞数</p>
 * @method integer getHighLevelVulCnt() 获取<p>高危漏洞数</p>
 * @method void setHighLevelVulCnt(integer $HighLevelVulCnt) 设置<p>高危漏洞数</p>
 * @method integer getMediumLevelVulCnt() 获取<p>中危漏洞数</p>
 * @method void setMediumLevelVulCnt(integer $MediumLevelVulCnt) 设置<p>中危漏洞数</p>
 * @method integer getLowLevelVulCnt() 获取<p>低危漏洞数</p>
 * @method void setLowLevelVulCnt(integer $LowLevelVulCnt) 设置<p>低危漏洞数</p>
 * @method integer getVirusCnt() 获取<p>木马数</p>
 * @method void setVirusCnt(integer $VirusCnt) 设置<p>木马数</p>
 * @method integer getSensitiveCnt() 获取<p>敏感信息数</p>
 * @method void setSensitiveCnt(integer $SensitiveCnt) 设置<p>敏感信息数</p>
 * @method string getLayerCreateTime() 获取<p>镜像层创建时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method void setLayerCreateTime(string $LayerCreateTime) 设置<p>镜像层创建时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 */
class ImageLayer extends AbstractModel
{
    /**
     * @var integer <p>镜像层序号</p>
     */
    public $LayerIndex;

    /**
     * @var string <p>镜像层id</p>
     */
    public $LayerId;

    /**
     * @var string <p>镜像层命令行</p>
     */
    public $LayerCmd;

    /**
     * @var integer <p>镜像层大小</p>
     */
    public $Size;

    /**
     * @var integer <p>严重漏洞数</p>
     */
    public $CriticalLevelVulCnt;

    /**
     * @var integer <p>高危漏洞数</p>
     */
    public $HighLevelVulCnt;

    /**
     * @var integer <p>中危漏洞数</p>
     */
    public $MediumLevelVulCnt;

    /**
     * @var integer <p>低危漏洞数</p>
     */
    public $LowLevelVulCnt;

    /**
     * @var integer <p>木马数</p>
     */
    public $VirusCnt;

    /**
     * @var integer <p>敏感信息数</p>
     */
    public $SensitiveCnt;

    /**
     * @var string <p>镜像层创建时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     */
    public $LayerCreateTime;

    /**
     * @param integer $LayerIndex <p>镜像层序号</p>
     * @param string $LayerId <p>镜像层id</p>
     * @param string $LayerCmd <p>镜像层命令行</p>
     * @param integer $Size <p>镜像层大小</p>
     * @param integer $CriticalLevelVulCnt <p>严重漏洞数</p>
     * @param integer $HighLevelVulCnt <p>高危漏洞数</p>
     * @param integer $MediumLevelVulCnt <p>中危漏洞数</p>
     * @param integer $LowLevelVulCnt <p>低危漏洞数</p>
     * @param integer $VirusCnt <p>木马数</p>
     * @param integer $SensitiveCnt <p>敏感信息数</p>
     * @param string $LayerCreateTime <p>镜像层创建时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
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
        if (array_key_exists("LayerIndex",$param) and $param["LayerIndex"] !== null) {
            $this->LayerIndex = $param["LayerIndex"];
        }

        if (array_key_exists("LayerId",$param) and $param["LayerId"] !== null) {
            $this->LayerId = $param["LayerId"];
        }

        if (array_key_exists("LayerCmd",$param) and $param["LayerCmd"] !== null) {
            $this->LayerCmd = $param["LayerCmd"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("CriticalLevelVulCnt",$param) and $param["CriticalLevelVulCnt"] !== null) {
            $this->CriticalLevelVulCnt = $param["CriticalLevelVulCnt"];
        }

        if (array_key_exists("HighLevelVulCnt",$param) and $param["HighLevelVulCnt"] !== null) {
            $this->HighLevelVulCnt = $param["HighLevelVulCnt"];
        }

        if (array_key_exists("MediumLevelVulCnt",$param) and $param["MediumLevelVulCnt"] !== null) {
            $this->MediumLevelVulCnt = $param["MediumLevelVulCnt"];
        }

        if (array_key_exists("LowLevelVulCnt",$param) and $param["LowLevelVulCnt"] !== null) {
            $this->LowLevelVulCnt = $param["LowLevelVulCnt"];
        }

        if (array_key_exists("VirusCnt",$param) and $param["VirusCnt"] !== null) {
            $this->VirusCnt = $param["VirusCnt"];
        }

        if (array_key_exists("SensitiveCnt",$param) and $param["SensitiveCnt"] !== null) {
            $this->SensitiveCnt = $param["SensitiveCnt"];
        }

        if (array_key_exists("LayerCreateTime",$param) and $param["LayerCreateTime"] !== null) {
            $this->LayerCreateTime = $param["LayerCreateTime"];
        }
    }
}
