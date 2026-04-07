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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AdBreakInfo。
 *
 * @method string getSourceLocationId() 获取SourceLocationId。
 * @method void setSourceLocationId(string $SourceLocationId) 设置SourceLocationId。
 * @method string getVodSourceName() 获取VodSourceName。
 * @method void setVodSourceName(string $VodSourceName) 设置VodSourceName。
 * @method integer getOffset() 获取Offset。
 * @method void setOffset(integer $Offset) 设置Offset。
 * @method string getMessageType() 获取MessageType，分SpliceInsert和TimeSignal。
 * @method void setMessageType(string $MessageType) 设置MessageType，分SpliceInsert和TimeSignal。
 * @method TimeSignalInfo getTimeSignalConf() 获取TimeSignalConf。
 * @method void setTimeSignalConf(TimeSignalInfo $TimeSignalConf) 设置TimeSignalConf。
 * @method SpliceInsertInfo getSpliceInsertConf() 获取SpliceInsertConf。
 * @method void setSpliceInsertConf(SpliceInsertInfo $SpliceInsertConf) 设置SpliceInsertConf。
 * @method array getMetadatas() 获取Metadatas。
 * @method void setMetadatas(array $Metadatas) 设置Metadatas。
 * @method string getSourceLocationName() 获取SourceLocationName。
 * @method void setSourceLocationName(string $SourceLocationName) 设置SourceLocationName。
 */
class AdBreakInfo extends AbstractModel
{
    /**
     * @var string SourceLocationId。
     */
    public $SourceLocationId;

    /**
     * @var string VodSourceName。
     */
    public $VodSourceName;

    /**
     * @var integer Offset。
     */
    public $Offset;

    /**
     * @var string MessageType，分SpliceInsert和TimeSignal。
     */
    public $MessageType;

    /**
     * @var TimeSignalInfo TimeSignalConf。
     */
    public $TimeSignalConf;

    /**
     * @var SpliceInsertInfo SpliceInsertConf。
     */
    public $SpliceInsertConf;

    /**
     * @var array Metadatas。
     */
    public $Metadatas;

    /**
     * @var string SourceLocationName。
     */
    public $SourceLocationName;

    /**
     * @param string $SourceLocationId SourceLocationId。
     * @param string $VodSourceName VodSourceName。
     * @param integer $Offset Offset。
     * @param string $MessageType MessageType，分SpliceInsert和TimeSignal。
     * @param TimeSignalInfo $TimeSignalConf TimeSignalConf。
     * @param SpliceInsertInfo $SpliceInsertConf SpliceInsertConf。
     * @param array $Metadatas Metadatas。
     * @param string $SourceLocationName SourceLocationName。
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
        if (array_key_exists("SourceLocationId",$param) and $param["SourceLocationId"] !== null) {
            $this->SourceLocationId = $param["SourceLocationId"];
        }

        if (array_key_exists("VodSourceName",$param) and $param["VodSourceName"] !== null) {
            $this->VodSourceName = $param["VodSourceName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("MessageType",$param) and $param["MessageType"] !== null) {
            $this->MessageType = $param["MessageType"];
        }

        if (array_key_exists("TimeSignalConf",$param) and $param["TimeSignalConf"] !== null) {
            $this->TimeSignalConf = new TimeSignalInfo();
            $this->TimeSignalConf->deserialize($param["TimeSignalConf"]);
        }

        if (array_key_exists("SpliceInsertConf",$param) and $param["SpliceInsertConf"] !== null) {
            $this->SpliceInsertConf = new SpliceInsertInfo();
            $this->SpliceInsertConf->deserialize($param["SpliceInsertConf"]);
        }

        if (array_key_exists("Metadatas",$param) and $param["Metadatas"] !== null) {
            $this->Metadatas = [];
            foreach ($param["Metadatas"] as $key => $value){
                $obj = new Metadata();
                $obj->deserialize($value);
                array_push($this->Metadatas, $obj);
            }
        }

        if (array_key_exists("SourceLocationName",$param) and $param["SourceLocationName"] !== null) {
            $this->SourceLocationName = $param["SourceLocationName"];
        }
    }
}
